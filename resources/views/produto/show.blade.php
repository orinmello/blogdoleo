@extends('adminlte::page')

@section('content')

    Produtos - SHOW
    <br>    
    <b>Categoria:</b> {{$produto->categoria->nome}} <br>
    <b>Nome:</b> {{ $produto->nome }} <br>
    <b>Quantidade:</b> {{ $produto->quantidade }} <br>
    <b>Valor:</b> {{ $produto->valor }}

@endsection



