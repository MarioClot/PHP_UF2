<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistreController extends Controller
{
    public function create()
    {
        return view('layouts.registre.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'rol' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password', 'rol']));

        //auth()->login($user);

        return redirect()->to('/home');
    }
}
