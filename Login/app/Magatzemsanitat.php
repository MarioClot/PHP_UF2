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

class Magatzemsanitat extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'localitzacio' , 'nom', 'stock_inici', 'stock_final', 'necessitem', 'proveidor', 'referencia_proveidor'

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