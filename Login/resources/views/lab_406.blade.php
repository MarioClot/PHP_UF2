@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                            Aqui va tot lo del Lab 406
                        <table class="table-striped table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Localitzacio</th>
                                    <th>Nom</th>
                                    <th>Quantitat inicial</th>
                                    <th>Quantitat actual</th>
                                    <th>Percentatge minim</th>
                                    <th>Proveidor</th>
                                    <th>Referencia proveidor</th>
                                    <th>Marca equip</th>
                                    <th>Nº lot</th>
                                </tr>
                            @foreach($material as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
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
                                        {{$item->percentatge_minim}}
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
