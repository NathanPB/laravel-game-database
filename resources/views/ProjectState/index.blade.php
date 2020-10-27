@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Project States</h1>
        <div>
            <a class="btn btn-primary" href="state/create">New</a>
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
            @foreach($states as $state)
                <tr>
                    <td>{{$state->id}}</td>
                    <td>{{$state->name}}</td>
                    <td>{{$state->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
