<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 24/01/2018
 * Time: 20:40
 */

namespace App\Http\Controllers;


use App\Reactiuslab406;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistreReactiusLab406Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $productes = DB::table('reactiuslab406s')->get();
        return view('layouts.reactius_lab_406.create',['productes' => $productes]);
    }


    public function store()
    {
        $this->validate(request(), [
            'localitzacio' => 'required',
            'nom' => 'required',
            'quantitat' => 'required',
            'stock_actual' => 'required',
            'stock_final' => 'required',
            'proveidor' => 'required',
            'referencia_proveidor' => 'required',
            'marca_equip' => 'required',
            'n_lot' => 'required',
            'data_caducitat' => 'required',
            'referencia_marca' => 'required',
        ]);

        $reactiuslab406= Reactiuslab406::create(request(['localitzacio','nom','quantitat','stock_actual','stock_final', 'proveidor','referencia_proveidor', 'marca_equip', 'n_lot','data_caducitat','referencia_marca']));

        //auth()->login($user);

        return redirect()->to('/reactiuslab406');
    }


}