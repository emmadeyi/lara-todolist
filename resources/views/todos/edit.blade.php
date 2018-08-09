@extends('layouts.app');

@section('content')
  <a href="/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
  <h1>Edit Todo</h1>
  <hr>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('todo', 'Todo Title')}}
      {{Form::text('todo', $todo->text, ['placeholder' => 'e.g (Todo One)', 'class' => 'form-control'])}}
    </div>    
    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', $todo->body, ['placeholder' =>'Enter Todo details', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('due', 'Due Date')}}
      {{Form::text('due', $todo->due, ['placeholder' =>'e.g (Wednesday 7th, July)', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">      
      {{Form::hidden('_method', 'PUT')}}
    </div>
    <div class="form-group">
      {{form::submit('submit', ['class' => 'btn btn-block btn-default'])}}
    </div>
  {!! Form::close() !!}

@endsection