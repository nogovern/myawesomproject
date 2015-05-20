<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {

	protected $table = "team_members";

	protected $fillable = [
		'team_id',
		'name',
		'back_number',
		'position',
		'hit_side',
		'pitch_side'
	];

	public static $def_positions = [
		'지명타자',	// 0
		'투수',
		'포수',
		'1루수',
		'2루수',
		'3루수',
		'유격수',
		'좌익수',
		'중견수',
		'우익수'		// 9
	];

	public function team()
	{
		return $this->belongsTo('App\Team');
	}

	public function getPositionName()
	{
		if (! $this->position)
		{
			return 'Not Assigned';
		}

		return self::$def_positions[$this->position];
	}
}
