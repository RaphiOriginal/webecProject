<?php namespace App\Http\Controllers;

use Session;
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
                    $errormsg = "Passwörter stimmen nicht überein!";
                    session(['error' => $errormsg]);
                    return redirect()->back();
                }
            } else {
                //passwort und email vergessen
                $errormsg = "E-Mail oder Passwort vergessen!";
                session(['error' => $errormsg]);
                return redirect()->back();
            }
    }
    public function eventAdder($id){
        $user = session('loggedInUser');
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
        
        $user = session('loggedInUser');
        $user->events()->detach($id);
        return redirect()->back();
    }
    public function delete(){
        $user = session('loggedInUser');
        Session::flush();
        $user->delete();
        return redirect()->route('index');
    }
    public function departmentRemover($id){
        $user = session('loggedInUser');
        $user->departments()->detach($id);
        return redirect()->back();
    }
    public function departmentAdder($id){
        $user = session('loggedInUser');
        $user->departments()->attach($id);
        return redirect()->back();
    }
}
