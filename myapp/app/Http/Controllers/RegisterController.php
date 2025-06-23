<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'nullable|string|max:255',
            'login' => 'required|string|max:255|unique:users,login',
            'mail' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'login' => $request->login,
            'email' => $request->mail,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}
