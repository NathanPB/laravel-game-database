@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Games</h1>
        <div>
            <a class="btn btn-primary" href="/game/create">New</a>
        </div>
    </div>
    {!! Form::open(['url' => '/game']) !!}
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
                <th>Genre</th>
                <th>Release Year</th>
                <th>State</th>
                <th>License</th>
                <th>Engine</th>
                <th>Languages</th>
                <th>Organizations</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->genre->name}}</td>
                    <td>{{$game->release_year}}</td>
                    <td>{{$game->project_state->name}}</td>
                    <td>{{$game->license}}</td>
                    <td>{{$game->engine->name}}</td>
                    <td>
                        <ul>
                            @foreach($game->langs as $lang)
                                <li>{{$lang->programming_lang->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach($game->orgs as $org)
                                <li>{{$org->organization->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\GamesController@destroy']) !!}
                        <input name="id" value="{{$game->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $games->links() !!}
@stop
