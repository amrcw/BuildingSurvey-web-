@extends('layouts.admin')

@section('content')


    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    <h2>Jobs</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($jobs)
            @foreach($jobs as $job)

                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->user->name}}</td>
                    <td>{{$job->category ? $job->category->name : "Uncategorized"}}</td>
                    <td><img height="30" src="{{$job->photo ? $job->photo->file : '/images/placeholder.png'}}" alt=""></td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->description}}</td>
                    <td>{{$job->created_at->diffForHumans()}}</td>
                    <td>{{$job->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach
        @endif


        </tbody>
    </table>

    @stop