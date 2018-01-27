<?php
/**
 * Created by PhpStorm.
 * User: MarioAdmin
 * Date: 21/01/2018
 * Time: 13:41
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function material_lab_406()
    {
        $material = DB::table('lab406s')->get();
        $columnes = DB::getSchemaBuilder()->getColumnListing('lab406s');
        return view('lab_406', ['material' => $material,'columnes' => $columnes]);
    }

    public function proveidor()
    {
        $material = DB::table('proveidors')->get();
        $columnes = DB::getSchemaBuilder()->getColumnListing('proveidors');
        return view('proveidor', ['material' => $material,'columnes' => $columnes]);
    }

}