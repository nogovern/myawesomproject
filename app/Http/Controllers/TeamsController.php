<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Team;
use App\Member;

class TeamsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams = Team::all();

		return view('teams.teams', compact('teams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTeamRequest $request)
	{
		$team = Team::create(Request::all());

		return '팀 생성 성공!';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return redirect('teams/' . $id . '/members');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function createLineUp($id)
	{
		$team = Team::findOrFail($id);

		$def_positions = Member::$def_positions;

		$member_list = ['' => '-- 선수를 선택하세요 --'] + $team->members->lists('name', 'id');

		return view('teams.create_lineup' , compact('team', 'def_positions', 'member_list'));
	}

	public function saveLineUp($id, Request $request)
	{
		// dd($request->input('data'));
		
		$team = Team::findOrFail($id);

		$lineup = $request->input('data');
		$team->lineup = serialize($lineup);
		$team->save();	

		return redirect('teams/' . $id);
	}

}
