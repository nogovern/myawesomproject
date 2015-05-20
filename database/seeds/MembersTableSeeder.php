<?php

use Illuminate\Database\Seeder;

use App\Team;
use App\Member;

/**
 * 팀원
 */
class MembersTableSeeder extends Seeder {

	public function run()
	{
		$team_id = 1;		// Natural

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'장광희',
			'back_number'	=> '13',
			'position'		=> '5',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'박형순',
			'back_number'	=> '39',
			'position'		=> '4',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'선태환',
			'back_number'	=> '99',
			'position'		=> '1',
			'hit_side'		=> 'L',
			'hit_side'		=> 'L'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'박철호',
			'back_number'	=> '75',
			'position'		=> '1',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'문대식',
			'back_number'	=> '41',
			'position'		=> '6',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'오세민',
			'back_number'	=> '16',
			'position'		=> '7',
			'hit_side'		=> 'R',
			'hit_side'		=> 'S'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'최태현',
			'back_number'	=> '3',
			'position'		=> '9',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'김지훈',
			'back_number'	=> '7',
			'position'		=> '2',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'이찬희',
			'back_number'	=> '37',
			'position'		=> '8',
			'hit_side'		=> 'L',
			'hit_side'		=> 'L'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'김범식',
			'back_number'	=> '48',
			'position'		=> '9',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'김인식',
			'back_number'	=> '9',
			'position'		=> '3',
			'hit_side'		=> 'R',
			'hit_side'		=> 'S'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'정교순',
			'back_number'	=> '0',
			'position'		=> '1',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'소완중',
			'back_number'	=> '25',
			'position'		=> '7',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> $team_id,
			'name'		=>	'성기훈',
			'back_number'	=> '21',
			'position'		=> '3',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		/*
		LA 다저스 선수
		 */
		Member::create([
			'team_id'	=> 2,
			'name'		=>	'류현진',
			'back_number'	=> '99',
			'position'		=> '1',
			'hit_side'		=> 'L',
			'hit_side'		=> 'L'
		]);

		Member::create([
			'team_id'	=> 2,
			'name'		=>	'Clayton Edward Kershaw',
			'back_number'	=> '22',
			'position'		=> '1',
			'hit_side'		=> 'L',
			'hit_side'		=> 'L'
		]);

		Member::create([
			'team_id'	=> 2,
			'name'		=>	'Juan Uribe',
			'back_number'	=> '5',
			'position'		=> '5',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

		Member::create([
			'team_id'	=> 2,
			'name'		=>	'Yasiel Puig',
			'back_number'	=> '66',
			'position'		=> '9',
			'hit_side'		=> 'R',
			'hit_side'		=> 'R'
		]);

	}

}
