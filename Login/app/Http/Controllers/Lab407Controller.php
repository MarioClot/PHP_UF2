<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 25/01/2018
 * Time: 17:25
 */

namespace App\Http\Controllers;


use App\Lab407;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Lab407Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id){
        $item = Lab407::findOrFail($id);
        return view('layouts.lab_407.update',['item'=>$item]);
    }


    public function update(Request $request,$id){
        $prod = Lab407::findOrFail($id);
        $prod->localitzacio = $request['localitzacio'];
        $prod->nom = $request['nom'];
        $prod->quantitat_inicial = $request['quantitat_inicial'];
        $prod->quantitat_actual = $request['quantitat_actual'];
        $prod->proveidor = $request['proveidor'];
        $prod->referencia_proveidor = $request['referencia_proveidor'];
        $prod->marca_equip = $request['marca_equip'];
        $prod->n_lot = $request['n_lot'];
        $prod->save();
        return redirect('/lab_407');
    }


    public function delete($id){
        $prod = Lab407::findOrFail($id);
        $prod->delete();

        return redirect('/lab_407');
    }
}