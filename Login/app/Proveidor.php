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

class Proveidor extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //tablas de proveidor
        'referencia', 'nom','NIF_CIF','adreca','telefon','email','contacte','web'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

}