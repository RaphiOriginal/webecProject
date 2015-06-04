<?php namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function auth(Request $request){
    		$email = $request->input('email');
    		$password = $request->input('password');

    		$user = Member::where('email', '=', $email)->first();
    		session()->regenerate();
    		if($user != null){
    			if($user->password == $password){
    				session(['loggedInUser' => $user]);
    			}
    		}
    		return redirect()->back();
    }
}
