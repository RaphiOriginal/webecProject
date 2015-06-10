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
            $member->password = $request->input('password');
            $passwordCheck = $request->input('password2');
            if(strlen($member->email) > 0 && strlen($member->password) > 0 && strlen($passwordCheck) > 0){
                if($member->password == $passwordCheck){
            		$member->name = $request->input('lastname');
            		$member->prename = $request->input('prename');
            		$member->picture = $request->input('picture');
                    $member->stv_number = $request->input('stv-number');
                    $member->adress = $request->input('adress');
                    $member->PLZ = $request->input('PLZ');
                    $member->location = $request->input('location');
                    $member->is_admin = 0;
            		$member->save();
                    $departments = Department::all();
                    foreach($departments as $department){
                        $id = $request->input($department->id);
                        if($id != null){
                            $member->departments()->attach($id);
                        }
                    }
                    session(['loggedInUser' => $member]);
                    return view('index');
                } else {
                    //passwort stimmt nicht überein
                    return redirect()->back();
                }
            } else {
                //passwort und email vergessen
                return redirect()->back();
            }
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
        return redirect()->back();
    }
    public function eventRemover($id){
        echo '<script type="text/javascript">';
        echo 'alert("Trying to delete Event");';
        echo '</script>';
        $user = session('loggedInUser');
        $user->events()->detach($id);
        return redirect()->back();
    }
}
