@extends('adminlte::page')

@section('content')
    <h1>New Organization</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\OrganizationsController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('foundation_year', 'Foundation Year:') !!}
        {!! Form::number('foundation_year', date('yy'), ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('parent_org', 'Parent Organization:') !!}
        {!! Form::select(
            'parent_org',
             [null => "None"] + \App\Models\Organization::orderBy('name')->pluck('name', 'id')->toArray(),
             null,
             ['class' => 'form-control']
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop
