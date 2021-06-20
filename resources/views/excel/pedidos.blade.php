<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Monto</td>
            <td>direccion</td>
            <td>estado</td>
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
            <td>{{ $pedido->address }}</td>
            <td>{{ $pedido->status }}</td>
            <td>{{ $pedido->client->user->name }}</td>
            @if ($pedido->motorizado_id != null)
                <td>{{ $pedido->motorizado->user->name }}</td>
            @else
                <td>sin asignar</td>
            @endif
            <td>{{ $pedido->disctrict->name }}</td>
            <td>{{ $pedido->tipopago->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
