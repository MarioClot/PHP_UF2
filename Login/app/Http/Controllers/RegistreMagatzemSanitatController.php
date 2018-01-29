<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 24/01/2018
 * Time: 20:40
 */

namespace App\Http\Controllers;


use App\Magatzemsanitat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistreMagatzemSanitatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $productes = DB::table('magatzemsanitats')->get();
        return view('layouts.magatzem_sanitat.create',['productes' => $productes]);
    }


    public function store()
    {
        $this->validate(request(), [
            'localitzacio' => 'required',
            'nom' => 'required',
            'stock_inici' => 'required',
            'stock_final' => 'required',
            'necessitem' => 'required',
            'proveidor' => 'required',
            'referencia_proveidor' => 'required'

        ]);

        $Magatzemsanitat= Magatzemsanitat::create(request(['localitzacio','nom','stock_inici','stock_final', 'necessitem','proveidor','referencia_proveidor']));

        //auth()->login($user);

        return redirect()->to('/magatzemsanitat');
    }


}