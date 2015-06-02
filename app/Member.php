<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
	protected $fillable = [
	'email',
	'name',
	'prename',
	'password',
	'picture'
	];
}