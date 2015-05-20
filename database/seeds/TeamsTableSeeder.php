<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder {

	public function run()
	{	
		// Foreign key 가 설정 된 테이블은 truncate 할 수 없음
		// -- 방법 : 먼저 SET FOREIGN_KEY_CHECKS = 0; 로 변경 후 
		// -- 다시 SET FOREIGN_KEY_CHECKS = 1; 을 적용
		
		// Team::truncate();

		Team::create([
			'name'	=>	'Natural',
		]);
		Team::create([
			'name'	=>	'LA 다저스',
		]);
		Team::create([
			'name'	=>	'Kia 타이거즈',
		]);

	}

}
