<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 24/01/2018
 * Time: 18:50
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create (Request $request){
        $usuari = new User();

        $usuari->name = $request->name;
        $usuari->email = $request->email;
        $usuari->password = $request->password;
        $usuari->rol = $request->rol;

        $usuari->save();
        return redirect('/home');
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
        $usuari = User::findOrFail($id);
        $usuari->delete();

        return redirect('/registre');
    }
}