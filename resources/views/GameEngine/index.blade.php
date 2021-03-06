@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Game Engines</h1>
        <div>
            <a class="btn btn-primary" href="/engine/create">New</a>
        </div>
    </div>
    {!! Form::open(['url' => '/engine']) !!}
    <div class="sidebar-form">
        <div class="input-group">
            <input
                name="filtro"
                placeholder="Pesquisa..."
                style="width: 95%"
            />
            <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
        </div>
    </div>
    <br/>
    {!! Form::close() !!}
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Release Year</th>
                <th>License</th>
                <th>Languages</th>
            </tr>
        </thead>
        <tbody>
            @foreach($engines as $engine)
                <tr>
                    <td>{{$engine->id}}</td>
                    <td>{{$engine->name}}</td>
                    <td>{{$engine->release_year}}</td>
                    <td>{{$engine->license}}</td>
                    <td>
                        <ul>
                            @foreach($engine->langs as $lang)
                                <li>{{$lang->lang->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\EnginesController@destroy']) !!}
                        <input name="id" value="{{$engine->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $engines->links() !!}
@stop
