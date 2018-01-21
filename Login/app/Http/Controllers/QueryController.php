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
    public function material_lab_406()
    {
        $material = DB::table('lab406')->get();
        $columnes = DB::getSchemaBuilder()->getColumnListing('lab406');
        return view('lab_406', ['material' => $material,'columnes' => $columnes]);
        //return $material;
    }
}