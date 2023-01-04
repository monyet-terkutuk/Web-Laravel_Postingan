<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('login.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            //menggunakan vipe sebagai tanda pemisah
            'name' => 'required|max:100',
            //menggunakan array dalam array
            'username' => ['required', 'min:4', 'max:100', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:100'
        ]);

        // cara enkripsi password
        // $validateData['password'] = bcrypt($validateData['password']);

        // enkripsi password menggunakan has
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // menggunakan fungsi request
        // $request->session()->flash('success', 'sukses sat');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
