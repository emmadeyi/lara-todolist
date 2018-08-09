@extends('layouts.app');

@section('content')
  <h1>Create Todo</h1>
  <hr>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('todo', 'Todo Title')}}
      {{Form::text('todo', '', ['placeholder' => 'e.g (Todo One)', 'class' => 'form-control'])}}
    </div>    
    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['placeholder' =>'Enter Todo details', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('due', 'Due Date')}}
      {{Form::text('due', '', ['placeholder' =>'e.g (Wednesday 7th, July)', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{form::submit('submit', ['class' => 'btn btn-block btn-default'])}}
    </div>
  {!! Form::close() !!}

@endsection