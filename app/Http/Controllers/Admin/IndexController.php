<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class IndexController extends Controller
{   protected $paginationTheme = 'bootstrap';
    public function index(){
        $pedidos=Pedido::paginate(8);
        return view('admin.pedidos.index', compact('pedidos'));
    }
}
