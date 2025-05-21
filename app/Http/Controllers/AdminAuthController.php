<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        //  return $request;

        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin';

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

       public function dashboard()
    {
        $students=Student::orderby('id','desc')->get();
        return view('admin.dashboard')->with('students',$students);
    }

/// Get All Students User Wise
    public function getAllStudent(Request $request,$id)
    {
        $students=Student::where('user_id',$id)->orderby('id','desc')->get();
        return view('admin.student_details')->with('students',$students);
    }






// Admin Logout
    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}
