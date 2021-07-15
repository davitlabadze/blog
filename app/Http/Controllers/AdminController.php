<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;

class AdminController extends Controller
{
    // login view
    public function login()
    {
        return view('backend/login');
    }

    //submit login
    public function submit_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $userCechk = Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
        if($userCechk>0){
            $adminData = Admin::where(['username'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
            return redirect('admin/dashboard');
        }else {
            return redirect('admin/login')->with('error', 'invalid username/password');
        }
    
    
    
    }

    //dashboard

    public function dashboard()
    {
        $posts= Post::orderBy('id','desc')->get();
        return view('backend.dashbord')->with('posts',$posts);
    }



    //Logout
    public function logout()
    {
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
