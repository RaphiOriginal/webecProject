<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
	protected $fillable = [
	'event_id', 'item'
	];
	public function event(){
		return $this->belongsTo('App\Event');
	}
}