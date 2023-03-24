@extends('layouts.admin')


@section('content')
{{--COLLECTIVE HTML FORM PACKAGE FOR CREATE USER --}}
<h1>Create Users</h1>
     {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'file'=>true])!!}
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
            {!! Form::label('file', 'Photo') !!}
            {!! Form::file('file', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password',  ['class'=>'form-control']) !!}
            </div>
          <div class="form-group">
         {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}





@stop