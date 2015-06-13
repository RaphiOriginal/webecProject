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
        $user->delete();
        return redirect()->route('index');
    }
    public function request(){
        echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">';
        echo '<div class="modal-dialog">';
            echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    echo '<h4 class="modal-title" id="myModalLabel">Login</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                    echo '<form class="form" method="POST" action="/Login" role="search">';
                        echo '<div class="form-group">';
                            echo '<input type="text" class="form-control" name="email" placeholder="E-Mail">';
                        echo '</div>';
                        echo '<div class="form-group">';
                            echo '<input type="password" class="form-control" name="password" placeholder="Passwort">';
                        echo '</div>';
                            echo '<button type="submit" class="btn btn-success">Login</button>';
                            echo '<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>';
                            echo '<a href="/Regrister" class="navbar-text navbar-link pull-right">Regristrieren</a>';
                    echo '</form>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
        //return redirect()->route('profile');
    }
}
