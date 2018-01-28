@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menú principal</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="botons">
                        <a href="{{ url('/lab_406') }}">
                            <button class="contenidor_menu">
                                <img class="img_boto" src="{{asset('assets/images/lab.svg')}}">
                                <span><b>LAB 406</b></span>
                            </button>
                        </a>
                        <a href="{{ url('/lab_407') }}">
                            <button class="contenidor_menu">
                                <img class="img_boto" src="{{asset('assets/images/lab.svg')}}">
                                <span><b>LAB 407</b></span>
                            </button>
                        </a>
                        <a href="{{ url('/reactiuslab406') }}">
                        <button class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span><b>REACTIUS LAB 406</b></span>
                        </button>
                        </a>
                        <a href="{{ url('/magatzemsanitat') }}">
                        <button class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/stock.svg')}}">
                            <span><b>MAGATZEM SANITAT</b></span>
                        </button>
                        </a>
                        @if (Auth::user()->getRol()=='professor')
                            <a href="{{ url('/registre') }}">
                                <button class="contenidor_menu">
                                    <img style="padding-top: 5%" class="img_boto" src="{{asset('assets/images/users.svg')}}">
                                    <span><b>USUARIS</b></span>
                                </button>
                            </a>
                            <a href="{{ url('/proveidor') }}">
                                <button class="contenidor_menu">
                                    <img style="padding-top: 5%" class="img_boto" src="{{asset('assets/images/providers.svg')}}">
                                    <span><b>PROVEÏDORS</b></span>
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
