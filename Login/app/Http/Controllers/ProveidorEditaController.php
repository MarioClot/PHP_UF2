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

class ProveidorEditaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id){
        $item = Proveidor::findOrFail($id);
        return view('layouts.proveidor.update',['item'=>$item]);
    }

    public function update(Request $request,$id){

        $prov = Proveidor::findOrFail($id);
        $prov->referencia = $request['referencia'];
        $prov->nom = $request['nom'];
        $prov->nif_cif = $request['NIF_CIF'];
        $prov->adreca = $request['adreca'];
        $prov->telefon = $request['telefon'];
        $prov->email = $request['email'];
        $prov->contacte = $request['contacte'];
        $prov->pagina_web = $request['web'];
        $prov->save();
        return redirect('/proveidor');

    }

    public function delete($id){

        $prov = Proveidor::findOrFail($id);
        $prov->delete();

        return redirect('/proveidor');

    }
}