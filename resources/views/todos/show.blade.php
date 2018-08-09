@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/">Go Back</a>
  <div>
    <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a> </h3> 
    <span class="label label-danger"> {{$todo->due}}</span>
    <hr> 
    <p>{{$todo->body}}</p>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}    
       
      {{Form::hidden('_method', 'DELETE')}}
      {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
      
    {!! Form::close() !!}
  </div>
@endsection