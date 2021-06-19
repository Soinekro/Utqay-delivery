<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese nombre de usuario">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                                    @foreach ($roles as $role)
                                    <label>
                                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                                        {{$role->name}}
                                    </label>
                                    @endforeach
                                    {!! Form::close() !!}
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No se encuentran Registros</strong>
            </div>
        @endif
    </div>
</div>
