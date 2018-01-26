<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 26/01/2018
 * Time: 20:54
 */

namespace App\Http\Controllers;

use Endroid\QrCode\QrCode;

class QRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $qrCode = new QrCode('Life is too short to be generating QR codes');
        return view('layouts.qr.exemple',['qrCode'=>$qrCode]);
    }

    public function decode(){
        $qrcode = new \QrReader('qrcode2.png');
        $text = $qrcode->text();
        return view('layouts.qr.decode',['text'=>$text]);
    }

    public function vista(){
        return view('/exemple');
    }
}