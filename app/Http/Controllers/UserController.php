<?php namespace App\Http\Controllers;

use App\Event;
use App\Department;
use App\Member;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function store(Request $request){
    		$member = new Member;
    		$member->email = $request->input('email');
    		$member->name = $request->input('lastname');
    		$member->prename = $request->input('prename');
    		$member->password = $request->input('password');
    		$member->picture = $request->input('picture');
    		$member->save();
            $departments = Department::all();
            foreach($departments as $department){
                $id = $request->input($department->id);
                if($id != null){
                    $member->departments()->attach($id);
                }
            }
            return view('regrister');
    }
    public function index(){
    	return Member::all();
    }
    public function eventAdder(Request $request){
        $user = session('loggedInUser');
        $id = $request->input('id');
        $userEvents = $user->events()->get();
        $check = false;
        foreach($userEvents as $eventcheck){
            if(!$check){
                $check = $eventcheck->id == $id;
            }
        }
        if(!$check){
            $user->events()->attach($id);
        }
        $event = Event::find($id);
        return redirect()->back();
    }
}
