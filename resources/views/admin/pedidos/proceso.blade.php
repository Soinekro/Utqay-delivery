@extends('adminlte::page')
@section('title' , 'Utqay-Administrador')

@section('content_header')
<a href="{{ route('admin.roles.create') }}" class="btn btn-success float-right">exportar a Exccell</a>
    <h1>Utqay-Administrador</h1>
@endsection

@section('content')
@include('admin.pedidos.index')
@endsection

@section('css')

@endsection
@section('js')
<script> console.log('Hi!'); </script>
@endsection
