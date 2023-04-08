@extends('adminlte::page')

@section('content')

    Formulario - EDIT
    <br>
    {!! Form::open(['url' => 'categoria/' . $categoria->id, 'method' => 'put']) !!}
    <br>
    {{Form::label('nome', 'Nome:');}} <br>
    {{Form::text('nome', $categoria->nome) }} 
    <br>
    {{Form::submit('Enviar');}}

    {!! Form::close() !!}

@endsection



