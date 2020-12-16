@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Organizations</h1>
        <div>
            <a class="btn btn-primary" href="/organization/create">New</a>
        </div>
    </div>
    {!! Form::open(['url' => '/organization']) !!}
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
                <th>Foundation Year</th>
                <th>Parent Organization</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orgs as $org)
                <tr id="org-{{$org->id}}">
                    <td>{{$org->id}}</td>
                    <td>{{$org->name}}</td>
                    <td>{{$org->foundation_year}}</td>
                    <td>
                        @if($org->parent_org != null)
                            <a href="#org-{{$org->parent_org}}">
                                {{$org->parent_org}}
                            </a>
                        @endif
                    </td>
                    <td>
                        {!! Form::open(['action' => 'App\Http\Controllers\OrganizationsController@destroy']) !!}
                        <input name="id" value="{{$org->id}}" hidden/>
                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $orgs->links() !!}
@stop
