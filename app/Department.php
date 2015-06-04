<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	protected $fillable = [
	'name',
	'description',
	'location',
	'picture',
	'training_day',
	'straining_start'
	];

	public function events(){
		return $this->belongsToMany('App/Event');
	}
	public function members(){
		return $this->belongsToMany('App/Member');
	}
}