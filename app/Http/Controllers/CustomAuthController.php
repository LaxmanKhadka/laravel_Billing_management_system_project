<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    // Custom Log in with 
    public function login()
    {
        return view('auth.login');
    } 

    public function customlogin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('You are Signed in');
                                }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    
    // Custom Registeration
    
    public function register()
    {
        return view('auth.register');
    }

    public function customregister(Request $req)
    {  
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $req->all();
        $check = $this->create($data);
          
        return redirect("home")->withSuccess('You have signed-in');
    }
 // Creating data
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
    // Returning Dashboard
    public function dashboard()
    {
        if(Auth::check()){
            return view('components.dashboard');
        }
   
        return redirect("login")->withSuccess('are not allowed to access');
    }

    public function signout() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }

          
}
