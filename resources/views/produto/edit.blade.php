@extends('adminlte::page')

@section('content')

    Formulario - EDIT
    <br>
    {!! Form::open(['url' => 'produto/' . $produto->id, 'method' => 'put']) !!}
    <br>
    {{Form::label('categoria', 'Categoria:')}} <br>
    {{Form::select('categoria_id', $categorias, $produto->categoria_id);}} <br>

    {{Form::label('nome', 'Nome:');}} <br>
    {{Form::text('nome', $produto->nome) }} <br>

    {{Form::label('quantidade', 'Quantidade:');}} <br>
    {{Form::text('quantidade', $produto->quantidade)}} <br>

    {{Form::label('valor', 'Valor:');}} <br>
    {{Form::text('valor', $produto->valor)}} <br>
    <br>
    {{Form::submit('Enviar');}}

    {!! Form::close() !!}

@endsection




