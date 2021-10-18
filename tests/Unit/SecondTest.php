<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecondTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
        // $this->get('/products')->assertStatus(200);
        $this->get('/api/show/{id}')->assertStatus(200);
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
}
