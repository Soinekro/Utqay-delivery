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
    public function index()
    {
        return view('admin.pedidos.index',compact('pedidos'));
    }
}
