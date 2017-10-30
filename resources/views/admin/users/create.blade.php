@extends('layouts.admin')

@section('content')

    <h2>Create Users</h2>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name :') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('email','Email :') !!}
             {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('role_id','Role :') !!}
             {!! Form::select('role_id',array_merge(['' =>'Choose Options'],$roles), null ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('is_active','Status :') !!}
             {!! Form::select('is_active',array(1=>'Active', 0=>'Inactive'),null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('password','Password :') !!}
             {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('photo_id','Upload Image :') !!}
             {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create  user',['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}

        @include('include.form-error')

    @stop