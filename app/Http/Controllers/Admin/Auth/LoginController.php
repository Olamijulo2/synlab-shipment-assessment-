<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Auth;


class LoginController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    



    public function showLoginForm()
    {
         return view('admin.login');
    }


    
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
    
        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];
    
        //validate the request.
        $request->validate($rules,$messages);
    }
    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function login(Request $request)
{
    $this->validator($request);
    
    if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
            ->intended(route('admin-dashboard'))
            ->with('success','You are Logged in as Admin!');
    }

    //Authentication failed...
    return $this->loginFailed();
}

public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
 
    return redirect()
        ->route('admin-login-form')
        ->with('status','Admin has been logged out!');
}
}
