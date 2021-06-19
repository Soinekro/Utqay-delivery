<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
class PedidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');/*
        $this->middleware('can:admin.users.create')->only('create', 'store');
        $this->middleware('can:admin.users.edit')->only('update','edit'); */
    }
    /* public function index()
    {
        return view('admin.pedidos.index',compact('pedidos'));
    } */
    public function concluidos()
    {   $pedidos= Pedido::where('status',3)->paginate(5);
        return view('admin.pedidos.concluidos',compact('pedidos'));
    }
    public function proceso()
    {   $pedidos= Pedido::where('status',2)->paginate(5);
        return view('admin.pedidos.proceso',compact('pedidos'));
    }
    public function espera()
    {   $pedidos= Pedido::where('status',1)->paginate(5);
        return view('admin.pedidos.espera',compact('pedidos'));
    }
}
