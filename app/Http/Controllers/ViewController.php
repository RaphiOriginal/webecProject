<?php namespace App\Http\Controllers;

use Session;
use App\Event;
use App\Department;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ViewController extends BaseController
{
    public function department($id){
        $department = Department::find($id);
        return view('department', ['department' => $department]);
    }
    public function events(){
    	return view('events');
    }
    public function profile(){
    	return view('profile');
    }
    public function createEvent(){
    	return view('createEvent');
    }
    public function regrister(){
    	return view('regrister');
    }
    public function index(){
    	return view('index');
    }
    public function event($id){
    	$event = Event::find($id);
        session(['EditEvent' => $event]);
    	return view('event', ['event' => $event]);
    }
}
