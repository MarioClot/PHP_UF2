@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="botons">
                        <a href="{{ url('/lab_406') }}">
                            <button class="contenidor_menu">
                                <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                                <span>LAB 406</span>
                            </button>
                        </a>
                        <a href="{{ url('/lab_407') }}">
                            <button class="contenidor_menu">
                                <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                                <span>LAB 407</span>
                            </button>
                        </a>
                        <a href="{{ url('/reactiuslab406') }}">
                        <button class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>REACTIUS LAB 406</span>
                        </button>
                        </a>
                        <a href="{{ url('/magatzemsanitat') }}">
                        <button class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>MAGATZEM SANITAT</span>
                        </button>
                        </a>
                        @if (Auth::user()->getRol()=='professor')
                            <a href="{{ url('/registre') }}">
                                <button class="contenidor_menu">
                                    <img style="padding-top: 5%" class="img_boto" src="{{asset('assets/images/users.svg')}}">
                                    <span>USUARIS</span>
                                </button>
                            </a>
                            <a href="{{ url('/proveidor') }}">
                                <button class="contenidor_menu">
                                    <img style="padding-top: 5%" class="img_boto" src="{{asset('assets/images/providers.svg')}}">
                                    <span>PROVEÏDORS</span>
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
