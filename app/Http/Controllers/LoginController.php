<?php namespace App\Http\Controllers;

use Session;
use App\Member;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function auth(Request $request){
    		$email = $request->input('email');
    		$password = $request->input('password');
    		$user = Member::where('email', '=', $email)->first();
            echo var_dump($user);
            if($user != null) $member = Member::find($user->id);
			if($user != null && $user->password == $password){
				session(['loggedInUser' => $member]);
                return redirect()->route('index');
			} else {
                $errormsg = "Falsches E-Mail oder Passwort!";
                session(['error' => $errormsg]);
                return redirect()->back();
            }
    		
    }
    public function logout(Request $request){
            Session::flush();
            session()->regenerate();
            return redirect()->route('index');
    }
}
