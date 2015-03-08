@extends('layouts.main')

@section("content")


	{{ Form::model($list, array('route' => ["todos.update",$list->id], 'method'=>'PUT') ) }}
		
		@include('todos.partial._form')

	{{ Form::close() }}

	{{ link_to_route('todos.index', 'back') }}
@stop