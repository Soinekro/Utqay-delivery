@extends('adminlte::page')
@section('title', 'Utqay')

@section('content_header')
    <a href="{{ route('admin.motorizados.create') }}" class="btn btn-warning float-right">Crear nuevo Rol</a>
    <h1>Utqay</h1>
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
                        <th>Celular</th>
                        <th>Nombre</th>
                        <th>Placa</th>
                        <th>DNI </th>
                        <th></th>
                        <th>Estado</th>
                        <th>Distrito</th>
                        <th >opciones
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($motorizados as $motorizado)
                        <tr>
                            <td>{{ $motorizado->id }}</td>
                            <td>{{ $motorizado->user->celular }}</td>
                            <td>{{ $motorizado->user->name }}</td>
                            <td>{{ $motorizado->placa }}</td>
                            <td>{{ $motorizado->dni }}</td>
                            <td>{{ $motorizado->estado }}</td>
                            <td>{{ $motorizado->status }}</td>
                            <td>{{ $motorizado->disctrict->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.alieds.edit', $motorizado) }}" class="btn btn-primary"> Modificar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.alieds.destroy', $motorizado) }}" method="POST">
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

