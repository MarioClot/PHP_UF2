<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 24/01/2018
 * Time: 20:40
 */

namespace App\Http\Controllers;


use App\Lab406;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registre406Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $productes = DB::table('lab406s')->get();
        return view('layouts.lab_406.create',['productes' => $productes]);
    }

    public function store()
    {
        $this->validate(request(), [
            'localitzacio' => 'required',
            'nom' => 'required',
            'quantitat_inicial' => 'required',
            'quantitat_actual' => 'required',
            'proveidor' => 'required',
            'referencia_proveidor' => 'required',
            'marca_equip' => 'required',
            'n_lot' => 'required'
        ]);

        $lab406 = Lab406::create(request(['localitzacio','nom','quantitat_inicial','quantitat_actual', 'proveidor','referencia_proveidor', 'marca_equip', 'n_lot']));

        //auth()->login($user);

        return redirect()->to('/lab_406');
    }

}