<?php namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class DepartmentController extends BaseController
{
    public function index(){
    	return Department::all();
    }
    public function getDepartment($id){
        $department = Department::find($id);
        return view('department', ['department' => $department]);
    }
}
