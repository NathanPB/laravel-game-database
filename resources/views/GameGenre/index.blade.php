@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Game Genre</h1>
        <div>
            <a class="btn btn-primary" href="/genre/create">New</a>
        </div>
    </div>
    {!! Form::open(['url' => '/genre']) !!}
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
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
                <tr>
                    <td>{{$genre->id}}</td>
                    <td>{{$genre->name}}</td>
                    <td>{{$genre->description}}</td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\GameGenreController@destroy']) !!}
                        <input name="id" value="{{$genre->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $genres->links() !!}
@stop
