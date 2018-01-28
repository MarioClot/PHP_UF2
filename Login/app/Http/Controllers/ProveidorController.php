<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 25/01/2018
 * Time: 17:25
 */

namespace App\Http\Controllers;


use App\Proveidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProveidorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        $proveidors = DB::table('proveidors')->get();
        return view('layouts.proveidor.create',['proveidors' => $proveidors]);
    }

    public function store()
    {
        $this->validate(request(), [
            'referencia' => 'required',
            'nom' => 'required',
            'NIF_CIF' => 'required',
            'adreca' => 'required',
            'telefon' => 'required',
            'email' => 'required',
            'contacte' => 'required',
            'web' => 'required'
        ]);

        $proveidor = Proveidor::create(request(['referencia','nom','NIF_CIF','adreca', 'telefon','email', 'contacte', 'web']));

        //auth()->login($user);

        return redirect()->to('/proveidor');
    }
}