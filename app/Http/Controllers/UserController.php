<?php namespace App\Http\Controllers;

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
    }
}
