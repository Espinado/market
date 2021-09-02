<?php

namespace App\Http\Controllers\Management\Owner\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {

      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('management.owner.auth.admin_login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        $notification=array(
            'messege'=>'You have  logged in',
            'alert-type'=>'success'
             );
        return redirect()->intended(route('admin.dashboard'))->with($notification);
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        $notification=array(
            'messege'=>'Brand Inserted Successfully',
            'alert-type'=>'success'
             );
        Auth::guard('admin')->logout();
        return redirect('/admin')->with($notification);
    }
}