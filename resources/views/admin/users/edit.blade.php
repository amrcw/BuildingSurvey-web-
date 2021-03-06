@extends('layouts.admin')

@section('content')

    <h2>Edit Users</h2>

    <div class="row">

    <div class="col-sm-3">

        <img height="400" src="{{$user->photo ? $user->photo->file : '/images/placeholder.png'}}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-lg-9">

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

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
        {!! Form::label('photo_id','Upload Image :') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
            {!! Form::label('password','Password :') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::submit('Update  user',['class'=>'btn btn-primary col-sm-3']) !!}
    </div>

    {!! Form::close() !!}



   {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}


       <div class="form-group">
           {!! Form::submit('Delete user',['class'=>'btn btn-danger col-sm-3']) !!}
       </div>


       {!! Form::close() !!}

    </div>

    </div>

    <div class="row">
        @include('include.form-error')
    </div>
@stop