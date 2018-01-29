<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 25/01/2018
 * Time: 17:25
 */

namespace App\Http\Controllers;


use App\Reactiuslab406;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ReactiusLab406Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id){
        $item = Reactiuslab406::findOrFail($id);
        return view('layouts.reactius_lab_406.update',['item'=>$item]);
    }


    public function update(Request $request,$id){
        $prod = Reactiuslab406::findOrFail($id);
        $prod->localitzacio = $request['localitzacio'];
        $prod->nom = $request['nom'];
        $prod->quantitat = $request['quantitat'];
        $prod->stock_actual = $request['stock_actual'];
        $prod->stock_final = $request['stock_final'];
        $prod->proveidor = $request['proveidor'];
        $prod->referencia_proveidor = $request['referencia_proveidor'];
        $prod->marca_equip = $request['marca_equip'];
        $prod->n_lot = $request['n_lot'];
        $prod->data_caducitat = $request['data_caducitat'];
        $prod->referencia_marca = $request['referencia_marca'];
        $prod->save();
        return redirect('/reactiuslab406');
    }


    public function delete($id){
        $prod = Reactiuslab406::findOrFail($id);
        $prod->delete();

        return redirect('/reactiuslab406');
    }
}