@extends('layouts/app')

@section('content')
    <h1>Nous contacter</h1>
    <p>Une suggestion ou une requête ? Envoie nous un mail.</p>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '' , ['class' => 'form-control' , 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email adress')}}
            {{Form::text('email', '' , ['class' => 'form-control' , 'placeholder' => 'Enter email'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '' , ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', '' , ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection