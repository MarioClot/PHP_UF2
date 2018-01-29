@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
    @if (Auth::user()->getRol()=='professor')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reactius Lab 406</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/reactiuslab406">
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

                            <div class="form-group{{ $errors->has('quantitat') ? ' has-error' : '' }}">
                                <label for="quantitat" class="col-md-4 control-label">Quantitat</label>

                                <div class="col-md-6">
                                    <input id="quantitat" type="number" class="form-control" name="quantitat" value="{{ old('quantitat') }}" required autofocus>

                                    @if ($errors->has('quantitat'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantitat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('stock_actual') ? ' has-error' : '' }}">
                                <label for="stock_actual" class="col-md-4 control-label">Stock Actual</label>

                                <div class="col-md-6">
                                    <input id="stock_actual" type="number" class="form-control" name="stock_actual" value="{{ old('stock_actual') }}" required>

                                    @if ($errors->has('stock_actual'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('stock_actual') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('stock_final') ? ' has-error' : '' }}">
                                <label for="quantitat_actual" class="col-md-4 control-label">Stock Final</label>

                                <div class="col-md-6">
                                <input id="stock_final" type="number" class="form-control" name="stock_final" value="{{ old('stock_final') }}" required>
                                    @if ($errors->has('stock_final'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('stock_final') }}</strong>
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
                            <div class="form-group{{ $errors->has('data_caducitat') ? ' has-error' : '' }}">
                                <label for="data_caducitat" class="col-md-4 control-label">Data Caducitat</label>

                                <div class="col-md-6">
                                    <input id="data_caducitat" type="date" class="form-control" name="data_caducitat" value="{{ old('data_caducitat') }}" required>

                                    @if ($errors->has('data_caducitat'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('data_caducitat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('referencia_marca') ? ' has-error' : '' }}">
                                <label for="referencia_marca" class="col-md-4 control-label">Referencia Marca</label>

                                <div class="col-md-6">
                                    <input id="referencia_marca" type="text" class="form-control" name="referencia_marca" value="{{ old('referencia_marca') }}" required>

                                    @if ($errors->has('referencia_marca'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('referencia_marca') }}</strong>
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
                                    <th>Quantitat</th>
                                    <th>Stock Actual</th>
                                    <th>Stock Final</th>
                                    <th>Proveidor</th>
                                    <th>Referencia proveidor</th>
                                    <th>Marca equip</th>
                                    <th>Nº lot</th>
                                    <th>Data Caducitat</th>
                                    <th>Referència Marca</th>
                                    <th>QR</th>
                                </tr>
                            @foreach($productes as $item)
                                <!--?php dump($item->quantitat_actual*100/$item->quantitat_inicial<($item->percentatge_minim)) ?-->
                                @if (($item->stock_final*100/$item->stock_actual)<($item->percentatge_minim))
                                    <tr style="background-color: #ff7f7f">
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
                                        {{$item->quantitat}}
                                    </td>
                                    <td>
                                        {{$item->stock_actual}}
                                    </td>
                                    <td>
                                        {{$item->stock_final}}
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
                                    <td>
                                        {{$item->data_caducitat}}
                                    </td>
                                    <td>
                                        {{$item->referencia_marca}}
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' => 'codiqr/' . $item->nom, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'GET') }}
                                        {{ Form::submit('QR', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' => 'editprodR406/' . $item->id, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'GET') }}
                                        {{ Form::submit('Edita', array('class' => 'btn btn-primary')) }}
                                        {{ Form::close() }}
                                    </td>
                                    @if (Auth::user()->getRol()=='professor')
                                    <td>
                                        {{ Form::open(array('url' => 'deleteprodR406/' . $item->id, 'class' => 'pull-right')) }}
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
