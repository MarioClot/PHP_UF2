@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Editar: {{$item->nom}}</div>

                        <div class="panel-body">
                            @if (Auth::user()->getRol()=='professor')
                                <?php $readonly = ""?>
                            @else
                                <?php $readonly = "readonly"?>
                            @endif
                            <form method="POST" action="prodmod/{{$item->id}}">
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
                                    <th>Referencia Marca</th>
                                </tr>

                                    {{ csrf_field() }}
                                <tr>

                                    <td>
                                        <input id="localitzacio" spellcheck="false" {{$readonly}} type="text" class="form-control" name="localitzacio" value="{{ $item->localitzacio }}" required>
                                        @if ($errors->has('localitzacio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('localitzacio') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="nom" spellcheck="false" {{$readonly}} type="text" class="form-control" name="nom" value="{{ $item->nom }}" required>
                                        @if ($errors->has('nom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="quantitat" spellcheck="false" {{$readonly}} type="number" class="form-control" name="quantitat" value="{{ $item->quantitat }}" required>
                                        @if ($errors->has('quantitat'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('quantitat') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="stock_actual" spellcheck="false" type="number" class="form-control" name="stock_actual" value="{{ $item->stock_actual }}" required>
                                        @if ($errors->has('stock_actual'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('stock_actual') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="stock_final" spellcheck="false" {{$readonly}} type="number" class="form-control" name="stock_final" value="{{ $item->stock_final }}" required>
                                        @if ($errors->has('stock_final'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('stock_final') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="proveidor" spellcheck="false" {{$readonly}} type="text" class="form-control" name="proveidor" value="{{ $item->proveidor }}" required>
                                        @if ($errors->has('proveidor'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('proveidor') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="referencia_proveidor" spellcheck="false" {{$readonly}} type="text" class="form-control" name="referencia_proveidor" value="{{ $item->referencia_proveidor }}" required>
                                        @if ($errors->has('referencia_proveidor'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('referencia_proveidor') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="marca_equip" spellcheck="false" {{$readonly}} type="text" class="form-control" name="marca_equip" value="{{ $item->marca_equip }}" required>
                                        @if ($errors->has('marca_equip'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('marca_equip') }}</strong>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <input id="n_lot" spellcheck="false" {{$readonly}} type="text" class="form-control" name="n_lot" value="{{ $item->n_lot }}" required>
                                        @if ($errors->has('n_lot'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('n_lot') }}</strong>
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        <input id="data_caducitat" spellcheck="false" {{$readonly}} type="date" class="form-control" name="n_lot" value="{{ $item->data_caducitat }}" required>
                                        @if ($errors->has('data_caducitat'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('data_caducitat') }}</strong>
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        <input id="referencia_marca" spellcheck="false" {{$readonly}} type="text" class="form-control" name="referencia_marca" value="{{ $item->referencia_marca }}" required>
                                        @if ($errors->has('referencia_marca'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('referencia_marca') }}</strong>
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