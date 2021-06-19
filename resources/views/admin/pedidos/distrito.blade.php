@extends('adminlte::page')
@section('title', 'Utqay-Administrador')

@section('content_header')
aea
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <input wire:model="search" class="form-control" type="text" placeholder="Ingrese la direccion de un pedido">
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered text-dark ">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Monto</td>
                            <td>direccion</td>
                            <td>Cliente</td>
                            <td>motorizado</td>
                            <td>distrito</td>
                            <td>tipo de pago</td>
                            <td colspan="2"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->monto }}</td>{{-- <td>{{$pedido->cantidad}}</td> --}}
                            <td>{{ $pedido->address }}</td>{{--
                            <td>{{ $pedido->provincia}}</td> --}}
                            <td>{{ $pedido->client->user->name }}</td>
                            <td>{{ $pedido->motorizado->user->name }}</td>
                            <td>{{ $pedido->disctrict->name }}</td>
                            <td>{{ $pedido->tipopago->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{-- {{route('admin.posts.edit',$post)}} --}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{-- {{route('admin.posts.destroy',$post)}} --}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </td>
                            </form>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $pedidos->links() }}
            </div>
        </div>
    </div>
    @endsection

    @section('css')

    @endsection
    @section('js')
        <script>
            console.log('Hi!');

        </script>
    @endsection
