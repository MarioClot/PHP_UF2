@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
    @if (Auth::user()->getRol()=='professor')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Laboratori 406</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/lab_406">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('localitzacio') ? ' has-error' : '' }}">
                                <label for="localitzacio" class="col-md-4 control-label">Localitzacio</label>

                                <div class="col-md-6">
                                    <input id="localitzacio" type="text" class="form-control" name="localitzacio" value="{{ old('localitzacio') }}" required autofocus>

                                    @if ($errors->has('localitzacio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('localitzacio') }}</strong>
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

                            <div class="form-group{{ $errors->has('quantitat_inicial') ? ' has-error' : '' }}">
                                <label for="quantitat_inicial" class="col-md-4 control-label">Quantitat inicial</label>

                                <div class="col-md-6">
                                    <input id="quantitat_inicial" type="number" class="form-control" name="quantitat_inicial" value="{{ old('quantitat_inicial') }}" required>

                                    @if ($errors->has('quantitat_inicial'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantitat_inicial') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantitat_actual') ? ' has-error' : '' }}">
                                <label for="quantitat_actual" class="col-md-4 control-label">Quantitat actual</label>

                                <div class="col-md-6">
                                <input id="quantitat_actual" type="number" class="form-control" name="quantitat_actual" value="{{ old('quantitat_actual') }}" required>
                                    @if ($errors->has('quantitat_actual'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantitat_actual') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('proveidor') ? ' has-error' : '' }}">
                                <label for="proveidor" class="col-md-4 control-label">Proveidor</label>

                                <div class="col-md-6">
                                    <input id="proveidor" type="text" class="form-control" name="proveidor" value="{{ old('proveidor') }}" required>

                                    @if ($errors->has('proveidor'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('proveidor') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('referencia_proveidor') ? ' has-error' : '' }}">
                                <label for="referencia_proveidor" class="col-md-4 control-label">Referencia proveidor</label>

                                <div class="col-md-6">
                                    <input id="referencia_proveidor" type="text" class="form-control" name="referencia_proveidor" value="{{ old('referencia_proveidor') }}" required>

                                    @if ($errors->has('referencia_proveidor'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('referencia_proveidor') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('marca_equip') ? ' has-error' : '' }}">
                                <label for="marca_equip" class="col-md-4 control-label">Marca equip</label>

                                <div class="col-md-6">
                                    <input id="marca_equip" type="text" class="form-control" name="marca_equip" value="{{ old('marca_equip') }}" required>

                                    @if ($errors->has('marca_equip'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('marca_equip') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('n_lot') ? ' has-error' : '' }}">
                                <label for="n_lot" class="col-md-4 control-label">Nº lot</label>

                                <div class="col-md-6">
                                    <input id="n_lot" type="text" class="form-control" name="n_lot" value="{{ old('n_lot') }}" required>

                                    @if ($errors->has('n_lot'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('n_lot') }}</strong>
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
                    <div class="panel-heading">Llistat de productes</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table-striped table-hover">
                                <tr>
                                    <th>Localitzacio</th>
                                    <th>Nom</th>
                                    <th>Quantitat inicial</th>
                                    <th>Quantitat actual</th>
                                    <th>Proveidor</th>
                                    <th>Referencia proveidor</th>
                                    <th>Marca equip</th>
                                    <th>Nº lot</th>
                                </tr>
                            @foreach($productes as $item)
                                <!--?php dump($item->quantitat_actual*100/$item->quantitat_inicial<($item->percentatge_minim)) ?-->
                                @if (($item->quantitat_actual*100/$item->quantitat_inicial)<($item->percentatge_minim))
                                    <tr style="background-color: #F2DEDE">
                                @else
                                    <tr>
                                @endif
                                    <td>
                                        {{$item->localitzacio}}
                                    </td>
                                    <td>
                                        {{$item->nom}}
                                    </td>
                                    <td>
                                        {{$item->quantitat_inicial}}
                                    </td>
                                    <td>
                                        {{$item->quantitat_actual}}
                                    </td>
                                    <td>
                                        {{$item->proveidor}}
                                    </td>
                                    <td>
                                        {{$item->referencia_proveidor}}
                                    </td>
                                    <td>
                                        {{$item->marca_equip}}
                                    </td>
                                    <td>
                                        {{$item->n_lot}}
                                    </td>
                                    @if (Auth::user()->getRol()=='professor')
                                    <td>
                                        {{ Form::open(array('url' => 'editprod/' . $item->id, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'GET') }}
                                        {{ Form::submit('Edita', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' => 'deleteprod/' . $item->id, 'class' => 'pull-right')) }}
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
