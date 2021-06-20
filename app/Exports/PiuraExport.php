<?php

namespace App\Exports;
use App\Models\Pedido;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PiuraExport implements FromView
{
    public function view(): View
    {
        return view('excel.pedidos', [
            'pedidos' => Pedido::where('disctrict_id',1)->get(),
        ]);
    }
}
