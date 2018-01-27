@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Editar: {{$item->nom}}</div>

                        <div class="panel-body">
                            <form method="POST" action="provmod/{{$item->id}}">
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

                                    {{ csrf_field() }}
                                <tr>

                                    <td>
                                        <input id="referencia" spellcheck="false" type="text" class="form-control" name="referencia" value="{{ $item->referencia }}" required>
                                        @if ($errors->has('referencia'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('referencia') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="nom" spellcheck="false" type="text" class="form-control" name="nom" value="{{ $item->nom }}" required>
                                        @if ($errors->has('nom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="NIF_CIF" spellcheck="false" type="number" class="form-control" name="NIF_CIF" value="{{ $item->NIF_CIF }}" required>
                                        @if ($errors->has('NIF_CIF'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('NIF_CIF') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="adreca" spellcheck="false" type="number" class="form-control" name="adreca" value="{{ $item->adreca }}" required>
                                        @if ($errors->has('adreca'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('adreca') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="telefon" spellcheck="false" type="number" class="form-control" name="telefon" value="{{ $item->telefon }}" required>
                                        @if ($errors->has('telefon'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('telefon') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="email" spellcheck="false" type="text" class="form-control" name="email" value="{{ $item->email }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="contacte" spellcheck="false" type="text" class="form-control" name="contacte" value="{{ $item->contacte }}" required>
                                        @if ($errors->has('contacte'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contacte') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="web" spellcheck="false" type="text" class="form-control" name="web" value="{{ $item->web }}" required>
                                        @if ($errors->has('web'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('web') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">
                                            Guarda
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection