@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Programming Languages</h1>
        <div>
            <a class="btn btn-primary" href="/lang/create">New</a>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($langs as $lang)
                <tr>
                    <td>{{$lang->id}}</td>
                    <td>{{$lang->name}}</td>
                    <td>{{$lang->description}}</td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\ProgrammingLangController@destroy']) !!}
                        <input name="id" value="{{$lang->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
