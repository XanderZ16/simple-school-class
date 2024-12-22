<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    function register(Request $request) {
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);

        // if($validated_data['usertype'] == 'teacher') {
        //     Teacher::create($validated_data);
        // }
        Teacher::create($validated_data);

        return redirect('/')->with('success', 'Akun terdaftar, silahkan login');
    }

    function login(Request $request) {
        $request->validate([
            'login_email' => 'required',
            'login_password' => 'required'
        ]);
    }

    function logout() {

    }
}
