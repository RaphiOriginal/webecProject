<?php namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EventController extends BaseController
{
    public function store(Request $request){
    		$event = new Event;
    		$event->name = $request->input('name');
    		$event->location = $request->input('location');
    		$event->amount = $request->input('amount');
    		$event->description = $request->input('description');
    		$event->startdate = $request->input('startdate');
    		$event->picture = $request->input('picture');
    		$event->save();
            return redirect()->back();
    }
    public function index(){
    	return Event::all();
    }
}
