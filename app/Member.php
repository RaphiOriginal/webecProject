<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
	protected $fillable = [
	'email',
	'name',
	'prename',
	'password',
	'stv_number',
	'adress',
	'PLZ',
	'location',
	'is_admin',
	'picture'
	];

	public function events(){
		return $this->belongsToMany('App\Event');
	}
	public function departments(){
		return $this->belongsToMany('App\Department');
	}
}