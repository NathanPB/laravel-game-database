@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Project States</h1>
        <div>
            <a class="btn btn-primary" href="/state/create">New</a>
        </div>
    </div>
    {!! Form::open(['url' => '/state']) !!}
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
            @foreach($states as $state)
                <tr>
                    <td>{{$state->id}}</td>
                    <td>{{$state->name}}</td>
                    <td>{{$state->description}}</td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\ProjectStateController@destroy']) !!}
                        <input name="id" value="{{$state->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $states->links() !!}
@stop
