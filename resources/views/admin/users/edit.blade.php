@extends('layouts.admin')


@section('content')
    {{--COLLECTIVE HTML FORM PACKAGE FOR CREATE USER --}}
    <h1>Edit Users</h1>
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
    {!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update',$user->id], 'files'=>true])!!}
    {{csrf_field()}}
    @include('include.form_error')
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', [''=>'Choose Option'] + $roles, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo_id') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password',  ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>
    {!! Form::close() !!}

         {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
             {{csrf_field()}}

              <div class="form-group">
             {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
             </div>
             {!! Form::close() !!}

    </div>





@stop