@extends('layouts.admin')


@section('content')
{{--COLLECTIVE HTML FORM PACKAGE FOR CREATE USER --}}
<h1>Create Users</h1>
{{--ERROR MESSAGE--}}
<div class="row">
    @include('include.form_error')
</div>
<div class="row">
     {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true])!!}
         {{csrf_field()}}

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
         {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
         </div>

</div>
         {!! Form::close() !!}





@stop