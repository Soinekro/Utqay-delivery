@extends('adminlte::page')
@section('title', 'Utqay Delivery')

@section('content_header')
    <h1>asignar</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="aler alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">{{$user->name}}</p>
            <h3>Listado de Roles</h3>
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                    {!! Form::submit('asignar Rol', ['class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
