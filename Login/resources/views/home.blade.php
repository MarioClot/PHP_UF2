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
                        <div class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>LAB 406</span>
                        </div>
                        <div class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>LAB 407</span>
                        </div>
                        <div class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>REACTIUS LAB 406</span>
                        </div>
                        <div class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>MAGATZEM SANITAT hghf</span>
                        </div>
                        <div class="contenidor_menu">
                            <img class="img_boto" src="{{asset('assets/images/chemistry.svg')}}">
                            <span>Pene4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
