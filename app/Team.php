<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	protected $table = "teams";

	protected $guarded = ['id'];

	public function members()
	{
		return $this->hasMany('App\Member')->orderBy('name', 'asc');
	}

	public function getLineupAttribute($lineup)
	{
		return unserialize($lineup);
	}

	// format : 타순|수비위치|이름|백넘버|우타|우투
	private function _encodeLineup($data)
	{

	}

	private function _decodeLineup($data)
	{

	}

}
