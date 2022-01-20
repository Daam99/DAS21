<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();
    	$roles =Role::all();
    	return view('admin/modules/users/index',compact('users','roles'));
    }

    public function changeRole(Request $request){
    	$user = User::find($request->user_id);
    	$user->assignRole($request->role);
    	return Redirect()->back()->with('status', 'Role updated successfully!');
    }
}
