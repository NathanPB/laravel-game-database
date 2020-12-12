@extends('adminlte::page')

@section('content')
    <h1>New Game Engine</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\EnginesController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('release_year', 'Release Year:') !!}
        {!! Form::number('release_year', date('yy'), ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('license', 'License:') !!}
        {!! Form::text('license', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('langs', 'Languages:') !!}
        <br/>
        <div class="input_fields_wrap"></div>
        <br>

        <button style="float:right" class="add_field_button btn btn-default">Adicionar</button>

        <br>
        <hr />
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
@stop


@section('js')
    <script>
        $(document).ready(function(){
            var wrapper = $(".input_fields_wrap");
            var add_button = $(".add_field_button");
            var x=0;
            $(add_button).click(function(e){
                x++;
                var newField = '<div><div style="width:94%; float:left" id="lang">{!! Form::select("langs[]", \App\Models\ProgrammingLang::orderBy("name")->pluck("name","id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione"]) !!}</div><button type="button" class="remove_field btn btn-danger btn-circle"><i class="fa fa-times"></button></div>';
                $(wrapper).append(newField);
            });
            $(wrapper).on("click",".remove_field", function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        })
    </script>

@stop
