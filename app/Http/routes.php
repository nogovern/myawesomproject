<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function() {
	return redirect('teams');
});

// 팀관리
Route::get('teams/{id}/line-up', 'TeamsController@createLineUp');
Route::post('teams/{id}/line-up', 'TeamsController@saveLineUp');
Route::resource('teams', 'TeamsController');

// 팀원관리
Route::resource('teams.members', 'TeamMembersController');




