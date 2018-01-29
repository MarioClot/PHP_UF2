<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 22/01/2018
 * Time: 17:49
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reactiuslab406 extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'localitzacio' , 'nom', 'quantitat', 'stock_actual', 'stock_final', 'proveidor', 'referencia_proveidor' , 'marca_equip' , 'n_lot', 'data_caducitat', 'referencia_marca'

        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'percentatge_minim' , 'remember_token',
    ];

}