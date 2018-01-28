@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
    @if (Auth::user()->getRol()=='professor')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Proveïdors</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/proveidor">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('referencia') ? ' has-error' : '' }}">
                                <label for="referencia" class="col-md-4 control-label">Referència</label>

                                <div class="col-md-6">
                                    <input id="referencia" type="text" class="form-control" name="referencia" value="{{ old('referencia') }}" required autofocus>

                                    @if ($errors->has('referencia'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('referencia') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                <label for="nom" class="col-md-4 control-label">Nom</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>

                                    @if ($errors->has('nom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('NIF_CIF') ? ' has-error' : '' }}">
                                <label for="NIF_CIF" class="col-md-4 control-label">NIF/CIF</label>

                                <div class="col-md-6">
                                    <input id="NIF_CIF" type="number" class="form-control" name="NIF_CIF" value="{{ old('NIF_CIF') }}" required>

                                    @if ($errors->has('NIF_CIF'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('NIF_CIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('adreca') ? ' has-error' : '' }}">
                                <label for="adreca" class="col-md-4 control-label">Adreça</label>

                                <div class="col-md-6">
                                <input id="adreca" type="number" class="form-control" name="adreca" value="{{ old('adreca') }}" required>
                                    @if ($errors->has('adreca'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adreca') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telefon') ? ' has-error' : '' }}">
                                <label for="telefon" class="col-md-4 control-label">Telèfon</label>

                                <div class="col-md-6">
                                    <input id="telefon" type="number" class="form-control" name="telefon" value="{{ old('telefon') }}" required>
                                    @if ($errors->has('telefon'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('contacte') ? ' has-error' : '' }}">
                                <label for="contacte" class="col-md-4 control-label">Contacte</label>

                                <div class="col-md-6">
                                    <input id="contacte" type="text" class="form-control" name="contacte" value="{{ old('contacte') }}" required>

                                    @if ($errors->has('contacte'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contacte') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
                                <label for="web" class="col-md-4 control-label">Pàgina web</label>

                                <div class="col-md-6">
                                    <input id="web" type="text" class="form-control" name="web" value="{{ old('web') }}" required>

                                    @if ($errors->has('web'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('web') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registra
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Llistat de proveïdors</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table-striped table-hover">
                                <tr>
                                    <th>Referència</th>
                                    <th>Nom</th>
                                    <th>NIF/CIF</th>
                                    <th>Adreça</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Contacte</th>
                                    <th>Pàgina web</th>
                                </tr>
                            @foreach($proveidors as $item)
                                    <td>
                                        {{$item->referencia}}
                                    </td>
                                    <td>
                                        {{$item->nom}}
                                    </td>
                                    <td>
                                        {{$item->NIF_CIF}}
                                    </td>
                                    <td>
                                        {{$item->adreca}}
                                    </td>
                                    <td>
                                        {{$item->telefon}}
                                    </td>
                                    <td>
                                        {{$item->email}}
                                    </td>
                                    <td>
                                        {{$item->contacte}}
                                    </td>
                                    <td>
                                        {{$item->web}}
                                    </td>
                                    @if (Auth::user()->getRol()=='professor')
                                    <td>
                                        {{ Form::open(array('url' => 'editprov/' . $item->id, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'GET') }}
                                        {{ Form::submit('Edita', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' => 'deleteprov/' . $item->id, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Elimina', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>

                        <!--?php dump($material) ?-->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
