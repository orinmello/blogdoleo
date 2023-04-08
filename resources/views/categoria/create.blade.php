@extends('adminlte::page')

@section('content')

    Formulario - CREATE
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(['url' => 'categoria/create']) !!}
    <br>
    {{Form::label('nome', 'Nome:');}} <br>
    {{Form::text('nome') }}
    <br>
    {{Form::submit('Enviar');}}

    {!! Form::close() !!}

@endsection


