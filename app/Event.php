<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	protected $fillable = [
	'name',
	'description',
	'location',
	'picture',
	'startdate',
	'amount'
	];

	public function participants(){
		return $this->belongsToMany('App\Member');
	}
	public function departments(){
		return $this->belongsToMany('App\Department');
	}
	public function items(){
		return $this->hasMany('App\Item');
	}
}