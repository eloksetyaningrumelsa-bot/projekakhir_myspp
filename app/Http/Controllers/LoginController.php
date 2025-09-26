<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Register(Request $request) {
        $field = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = User::create($field);

        // lanjutkan
        // return 
    }

    public function Login(Request $request) {
        $field = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->get();
        if (!$user || !Hash::check($request->password, $user->password)) {
            // return
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        
    }
}
