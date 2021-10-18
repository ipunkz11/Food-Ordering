<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('pages.login'); 
    }

    public function login(Request $request){
        $credentials= $request->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            $user = Auth::user();
            if($user->role == 'Owner'){
                return redirect()->intended('/dashboard');
            }elseif($user->role == 'Admin'){
                return redirect()->intended('/dashboard');
            }else{
                return redirect()->intended('/products');
            }            
        }

        return back()->with('LoginError', "Login Failed!");
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => "required|min:5|max:20",
            'email' => "required|email",
            'password' => "required|min:6|max:20",
            'role' => "required"
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('login');   
    }

    public function getRegister(){
        return view('pages.register');
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/products');
}

    public function error(){
        return view('pages.404');
    }

    public function dashboard(){
        return view('pages.chart');
    }
}
