<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attempt;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
    	$total_users = User::all()->count();
    	$total_students = User::role('student')->count(); // Returns only users with the role 'student'
    	$total_attempts = Attempt::all()->count();
    	return view('admin.dashboard',compact('total_attempts','total_students','total_users'));
    }
}
