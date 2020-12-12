@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="justify-content: space-between">
        <h1>Organizations</h1>
        <div>
            <a class="btn btn-primary" href="/organization/create">New</a>
        </div>
    </div>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
