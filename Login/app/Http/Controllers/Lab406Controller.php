<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 25/01/2018
 * Time: 17:25
 */

namespace App\Http\Controllers;


use App\Lab406;

class Lab406Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request,$id){
        $users = User::all();
        $usuari = User::findOrFail($id);

        $usuari->name = $request->name;
        $usuari->email = $request->email;
        $usuari->password = $request->password;
        $usuari->rol = $request->rol;

        $usuari->save();
        return redirect('/home');
    }

    public function delete($id){
        $prod = Lab406::findOrFail($id);
        $prod->delete();

        return redirect('/lab_406');
    }
}