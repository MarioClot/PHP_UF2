<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 26/01/2018
 * Time: 20:54
 */

namespace App\Http\Controllers;


class QRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $renderer = new \BaconQrCode\Renderer\Image\Png();
        $renderer->setHeight(256);
        $renderer->setWidth(256);
        $writer = new \BaconQrCode\Writer($renderer);
        $writer->writeFile('Que pasa tiu', 'qrcode1.png');
        return view('layouts.qr.exemple');
    }

    public function decode(){
        $QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
        $qrcode_text = $QRCodeReader->decode("/qrcode1.png");
        return view('layouts.qr.decode',['data'=> $qrcode_text]);
    }

    public function vista(){
        return view('/exemple');
    }
}