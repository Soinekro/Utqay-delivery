<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithPagination;
class PedidoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $pedidos=Pedido::where('address' , 'LIKE', '%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.pedido-index',compact('pedidos'));
    }
}
