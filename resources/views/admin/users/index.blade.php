@extends('adminlte::page')
@section('title' , 'Utqay-Administrador')

@section('content_header')

@endsection

@section('content')
    @livewire('admin.users-index')
@endsection

@section('css')

@endsection
@section('js')
<script> console.log('Hi!'); </script>
@endsection
