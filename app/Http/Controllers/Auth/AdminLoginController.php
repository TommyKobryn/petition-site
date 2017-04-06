<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  public function __construct()
  {
    $this -> middleware('guest:admin');
  }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);
      //attempt to login user
if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
  // if succesfull, then redirect to the good location
  return redirect()->intended(route('admin.dashboard'));
}
//if not ...
return redirect()->back()->withInput($request->only('email' , 'remember'));

    }
}
