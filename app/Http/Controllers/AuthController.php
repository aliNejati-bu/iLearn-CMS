<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validateRegister($request);

        $user = $this->createUser($request->all());

        Auth::login($user);

        return redirect()->route('home')->with('success', '');
    }

    private function validateRegister(Request $request)
    {
        return $request->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
    }
    
    private function createUser(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
    
    public function login(Request $request)
    {
        $credentials = $this->validateLogin($request);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', '');
        }

        return back()->withErrors([
            'email' => 'نام کاربری یا رمزعبور اشتباه می باشد',
        ])->onlyInput('email');
    }

    private function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::defaults()],
        ]);
    }
}
