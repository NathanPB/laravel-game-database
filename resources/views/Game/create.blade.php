@extends('adminlte::page')

@section('content')
    <h1>New Game</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\GamesController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genre', 'Genre:') !!}
        {!! Form::select(
            'genre',
             \App\Models\GameGenre::orderBy('name')->pluck('name', 'id')->toArray(),
             null,
             ['class' => 'form-control', 'required']
        ) !!}
    </div>


    <div class="form-group">
        {!! Form::label('release_year', 'Release Year:') !!}
        {!! Form::number('release_year', date('yy'), ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('project_state', 'Project State:') !!}
        {!! Form::select(
            'project_state',
             \App\Models\ProjectState::orderBy('name')->pluck('name', 'id')->toArray(),
             null,
             ['class' => 'form-control', 'required']
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('license', 'License:') !!}
        {!! Form::text('license', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('engine', 'Engine:') !!}
        {!! Form::select(
            'engine',
             \App\Models\GameEngine::orderBy('name')->pluck('name', 'id')->toArray(),
             null,
             ['class' => 'form-control', 'required']
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('langs', 'Languages:') !!}
        <br/>
        <div id="lang_input_wrap"></div>
        <br>

        <button id="add_lang" style="float:right" class="btn btn-default">Add</button>
        <br/><hr/>
    </div>

    <div class="form-group">
        {!! Form::label('orgs', 'Organizations:') !!}
        <br/>
        <div id="org_input_wrap"></div>
        <br>

        <button id="add_org" style="float:right" class="btn btn-default">Add</button>
        <br/><hr/>
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop


@section('js')
    <script>
        $(document).on("click",".remove_field", function(e){
            e.preventDefault();
            $(this).parent('div').remove();
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#add_lang").click(function(e){
                let newField = '<div><div style="width:94%; float:left" id="langs">{!! Form::select("langs[]", \App\Models\ProgrammingLang::orderBy("name")->pluck("name","id")->toArray(), null, ["class"=>"form-control", "required"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $("#lang_input_wrap").append(newField);
            });
        })
    </script>

    <script>
        $(document).ready(function(){
            $("#add_org").click(function(e){
                let newField = '<div><div style="width:94%; float:left" id="orgs">{!! Form::select("orgs[]", \App\Models\Organization::orderBy("name")->pluck("name","id")->toArray(), null, ["class"=>"form-control", "required"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $("#org_input_wrap").append(newField);
            });
        })
    </script>

@stop
