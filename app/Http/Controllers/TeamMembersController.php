<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use Request;

use App\Http\Requests\CreateTeamMemberRequest;
use App\Team;
use App\Member;

class TeamMembersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$team = Team::find($id);		
		$members = $team->members;		// member 로 바꿀까?

		return view('teams.members', compact('members', 'team'));		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{

		return view('teams.member_create')->with(['team_id' => $id]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTeamMemberRequest $request, $id)
	{
		// dd(Request::all());

		// validation
		// create 메서드 실행 시 자동적으로 validation 이 실행됨

		$input = $request->all();
		$input['team_id'] = $id;
		Member::create($input);
		
		return redirect('teams/' . $id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

}
