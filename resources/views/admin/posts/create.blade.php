@extends('layouts.admin')



@section('content')
    <h1>Create Post</h1>
    {{--ERROR MESSAGE--}}
    <div class="row">
        @include('include.form_error')
    </div>

    <div class="row">
     {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files'=>true]) !!}
         {{csrf_field()}}

         <div class="form-group">
             {!! Form::label('title', 'Title') !!}
             {!! Form::text('title', null, ['class'=>'form-control']) !!}
         </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', [''=>'Choose Option'] + $category, null, ['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo_id') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>
        <div class="form-group">
            {!! Form::label('body', 'Description') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>
          <div class="form-group">
         {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
    </div>


@stop