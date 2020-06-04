<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Authenticatable
{
    /** 
     * Login user
     */
    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]); 
        auth()->attempt($request->only('email','password'));
        if(!auth()->id()) return response()->json(['errors' => 'error.login'], 422);
        else return auth()->user();
    }

    /**
     * Logout user
     */
    public function logout() {
        auth()->logout();
        return response()->json('logout');
    }
}
