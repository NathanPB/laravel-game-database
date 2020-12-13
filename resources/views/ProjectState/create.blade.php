@extends('adminlte::page')

@section('content')
    <h1>New Project State</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\ProjectStateController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
