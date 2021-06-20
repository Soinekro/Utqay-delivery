<?php

namespace App\Exports;

use App\Models\Pedido;
use Maatwebsite\Excel\Concerns\FromCollection;
//vistas
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//varias tablas

class PedidosExport implements FromView
{

public function view(): View
    {
        return view('excel.pedidos', [
            'pedidos' => Pedido::all(),
        ]);
    }
}
