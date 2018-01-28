<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 24/01/2018
 * Time: 20:40
 */

namespace App\Http\Controllers;


use App\Lab407;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registre407Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $productes = DB::table('lab407s')->get();
        return view('layouts.lab_407.create',['productes' => $productes]);
    }


    public function store()
    {
        $this->validate(request(), [
            'localitzacio' => 'required',
            'nom' => 'required',
            'stock_inici' => 'required',
            'stock_final' => 'required',
            'proveidor' => 'required',
            'referencia_proveidor' => 'required',
            'marca_equip' => 'required',
            'n_lot' => 'required'
        ]);

        $lab4067= Lab407::create(request(['localitzacio','nom','stock_inici','stock_final', 'proveidor','referencia_proveidor', 'marca_equip', 'n_lot']));

        //auth()->login($user);

        return redirect()->to('/lab_407');
    }


}