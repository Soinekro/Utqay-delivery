<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese la direccion de un pedido">
    </div>
    @if ($pedidos->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>cantidad</td>
                    <td>direccion</td>
                    <td>estado</td>
                    <td>id Cliente</td>
                    <td>id motorizado</td>
                    <td>id producto</td>
                    <td>id aliado</td>
                    <td>id tipo de pago</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>                <tr>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->cantidad}}</td>
                        <td>{{$pedido->address}}</td>
                        <td>{{$pedido->status}}</td>
                        <td>{{$pedido->client_id}}</td>
                        <td>{{$pedido->motorizado_id}}</td>
                        <td>{{$pedido->product_id}}</td>
                        <td>{{$pedido->alied_id}}</td>
                        <td>{{$pedido->tipo_pago_id}}</td>
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
        {{$pedidos->links()}}
    </div>
    @else
        <div class="card-body">
            <Strong>No hay ningun registro</Strong>
        </div>
    @endif

</div>
