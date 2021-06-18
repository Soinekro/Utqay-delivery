<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class IndexController extends Controller
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function index(){
        $pedidos=Pedido::where('address','LIKE','%'.$this->search.'%')->paginate(5);
        return view('admin.index', compact('pedidos'));
    }
}
