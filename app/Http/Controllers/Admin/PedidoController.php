<?php

namespace App\Http\Controllers\Admin;

use App\Exports\VentasExport;
use App\Exports\PedidosExport;
use App\Exports\PiuraExport;
use App\Exports\PaitaExport;
use App\Exports\SullanaExport;
use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
class PedidoController extends Controller
{

    public function __construct()
    {
        /* $this->middleware('can:admin.users.index')->only('index'); *//*
        $this->middleware('can:admin.users.create')->only('create', 'store');
        $this->middleware('can:admin.users.edit')->only('update','edit'); */
    }
    public function index()
    {   $pedidos= Pedido::paginate(5);
        return view('admin.pedidos.index',compact('pedidos'));
    }
    public function concluidos()
    {   $pedidos= Pedido::where('status',3)->paginate(15);
        return view('admin.pedidos.concluidos',compact('pedidos'));
    }
    public function proceso()
    {   $pedidos= Pedido::where('status',2)->paginate(15);
        return view('admin.pedidos.proceso',compact('pedidos'));
    }
    public function espera()
    {   $pedidos= Pedido::where('status',1)->paginate(15);
        return view('admin.pedidos.espera',compact('pedidos'));
    }
    public function piura()
    {   $pedidos= Pedido::where('disctrict_id',1)
        ->where('status',3)
        ->paginate(5);
        return view('admin.distritos.piura',compact('pedidos'));
    }
    public function paita()
    {   $pedidos= Pedido::where('disctrict_id',2)
        ->where('status',3)
        ->paginate(5);
        return view('admin.distritos.paita',compact('pedidos'));
    }
    public function sullana()
    {   $pedidos= Pedido::where('disctrict_id',3)
        ->where('status',3)
        ->paginate(5);
        return view('admin.distritos.sullana',compact('pedidos'));
    }
    public function export()
    {
        return Excel::download(new PedidosExport,'utqay.xlsx');
    }
    public function piuraexport()
    {
        $pedidos = Pedido::where('disctrict_id', 1)->get();
        return Excel::download(new PiuraExport($pedidos),'piura.xlsx');
    }
    public function paitaexport()
    {
        $pedidos = Pedido::where('disctrict_id', 2)->get();
        return Excel::download(new PaitaExport($pedidos),'paita.xlsx');
    }
    public function sullanaexport()
    {
        $pedidos = Pedido::where('disctrict_id', 3)->get();
        return Excel::download(new SullanaExport($pedidos),'sullana.xlsx');
    }
    public function ventasexport()
    {
        $pedidos = Pedido::where('status', 3)->get();
        return Excel::download(new VentasExport($pedidos),'ventas.xlsx');
    }
}
