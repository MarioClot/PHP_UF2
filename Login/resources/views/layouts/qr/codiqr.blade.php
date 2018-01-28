@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Codi QR</div>
                        <div class="panel-body">
                            <?php $qrCode->writeFile('qrcode.png'); ?>
                            <img src="{{asset('qrcode.png')}}">
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

