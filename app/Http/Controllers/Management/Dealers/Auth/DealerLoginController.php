<?php

namespace App\Http\Controllers\Management\Dealers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DealerLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:dealer', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {

      return view('management.dealers.auth.login');
    }

    public function login(Request $request)

    {

      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('dealer')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('dealer')->logout();
        return redirect('/dealer');
    }
}
