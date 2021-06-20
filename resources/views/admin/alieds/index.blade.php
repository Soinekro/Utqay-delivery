@extends('adminlte::page')
@section('title', 'Utqay')

@section('content_header')
    <a href="{{ route('admin.pedidos.export') }}" class="btn btn-success float-right">Importar a exccel</a>
    <h1>Utqay-Administrador</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-warning">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>empresa</th>
                        <th>Encargado</th>
                        <th>Celular</th>
                        <th>Duenio </th>
                        <th>Productos afiliados</th>
                        <th colspan="2">
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($alieds as $alied)
                        <tr>
                            <td>{{ $alied->id }}</td>
                            <td>{{ $alied->name }}</td>
                            <td>{{ $alied->person }}</td>
                            <td>{{ $alied->user->celular }}</td>
                            <td>{{ $alied->user->name }}</td>
                            <td>{{$alied->products->count()}}</td>
                            <td width="10px">
                                <a href="{{ route('admin.alieds.edit', $alied) }}" class="btn btn-primary"> Modificar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.alieds.destroy', $alied) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

