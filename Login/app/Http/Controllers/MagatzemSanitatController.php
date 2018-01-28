<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 25/01/2018
 * Time: 17:25
 */

namespace App\Http\Controllers;


use App\Magatzemsanitat;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MagatzemSanitatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id){
        $item = Magatzemsanitat::findOrFail($id);
        return view('layouts.magatzem_sanitat.update',['item'=>$item]);
    }


    public function update(Request $request,$id){
        $prod = Magatzemsanitat::findOrFail($id);
        $prod->localitzacio = $request['localitzacio'];
        $prod->nom = $request['nom'];
        $prod->stock_inici = $request['stock_inici'];
        $prod->stock_final = $request['stock_final'];
        $prod->necessitem = $request['necessitem'];
        $prod->proveidor = $request['proveidor'];
        $prod->referencia_proveidor = $request['referencia_proveidor'];
        $prod->save();
        return redirect('/magatzem_sanitat');
    }


    public function delete($id){
        $prod = Magatzemsanitat::findOrFail($id);
        $prod->delete();

        return redirect('/magatzem_sanitat');
    }
}