<?php namespace App\Http\Controllers;

use Session;
use App\Member;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class LogoutController extends BaseController
{
    public function logout(Request $request){
    		Session::flush();
    		session()->regenerate();
    		return view('index');
    }
}
