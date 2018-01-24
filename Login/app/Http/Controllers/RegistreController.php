<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegistreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $usuaris = User::all();
        return view('layouts.registre.create',['usuaris' => $usuaris]);
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
