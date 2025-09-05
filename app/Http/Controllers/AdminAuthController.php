<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $admin = DB::table('admin_users')
            ->where('user_id', $request->user_id)
            ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_logged_in', true);
            Session::put('admin_user_id', $admin->user_id);
            Session::put('admin_id', $admin->id);
            
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'user_id' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        
        return view('admin.dashboard');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        Session::forget('admin_user_id');
        Session::forget('admin_id');
        
        return redirect()->route('admin.login');
    }
}
