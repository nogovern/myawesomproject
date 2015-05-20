<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('name');
			$table->string('back_number', 3);
			$table->string('position', 1);						// 주 포지션 (0-9)
			$table->string('pitch_side', 1)->default('R');			// L,R,S
			$table->string('hit_side', 1)->default('R');			// L,R,S
			$table->timestamps();

			$table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

			$table->unique(['team_id', 'back_number']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team_members');
	}

}
