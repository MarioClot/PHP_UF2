@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registra</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/registre">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                                <label for="rol" class="col-md-4 control-label">Rol</label>

                                <div class="col-md-6">
                                <!--input id="rol" type="text" class="form-control" name="rol" value="{{ old('rol') }}" required-->
                                    <select id="rol" class="field form-control" name="rol">
                                        <option value="alumne">Alumne</option>
                                        <option value="professor">Professor</option>
                                    </select>
                                    @if ($errors->has('rol'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Llistat d'usuaris</div>

                    <div class="panel-body">
                        <table class="table-striped table-hover">
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Esborrar</th>
                            </tr>

                            @foreach($usuaris as $user)

                                <tr>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->rol}}
                                    </td>
                                    <td>
                                    {{ Form::open(array('url' => 'deleteuser/' . $user->id, 'class' => 'pull-right')) }}
                                        {{ csrf_field() }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Esborra aquest usuari', array('class' => 'btn btn-primary')) }}
                                    {{ Form::close() }}
                                    </td>
                                </tr>

                            @endforeach

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection