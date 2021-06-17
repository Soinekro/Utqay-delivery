<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.create')->only('create', 'store');
        $this->middleware('can:admin.users.edit')->only('update','edit');
    }
    public function index()
    {
        return view('admin.users.index');
    }
    public function edit(User $user)
    {
        $roles=Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(Request $request,User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info','se asigno los roles correctamente');
    }
}
