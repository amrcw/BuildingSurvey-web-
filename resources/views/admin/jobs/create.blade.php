@extends('layouts.admin')

@section('content')

    <h2>Create Jobs</h2>

    <div class="row">

    {!! Form::open(['method'=>'POST','action'=>'AdminJobsController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Title :') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('category','Category :') !!}
            {!! Form::select('category',array('0'=>'Laravel','1'=>'PHP','2'=>'Javascript'),null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo :') !!}
            {!! Form::file('photo_id',['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('description','Description :') !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Create job',['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}

    </div>

    <div class="row">

    @include('include.form-error')

    </div>

@stop