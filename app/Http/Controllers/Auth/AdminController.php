<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    public function ShowLoginForm()
    {
        return view("auth.admin-login");
    }
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(view("layouts.app"));
        }

        // if unsuccessful, then redirect back to the login with the form data
//        return redirect()->back()->withInput($request->only('email', 'remember'));
        return view("auth.admin-login")->with($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
//        dd( Auth::guard('admin'));
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();

        return $this->loggedOut($request) ?: redirect('/admin/login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
    protected function loggedOut(Request $request)
    {
        //
    }
}
