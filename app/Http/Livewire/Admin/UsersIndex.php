<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Role;
class UsersIndex extends Component
{use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $roles=Role::all();
        $users=User::where('name','LIKE' , '%'.$this->search.'%')
        ->orWhere('email','LIKE' , '%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.users-index', compact('users','roles'));
    }
}
