@extends('layouts.main')

@section("content")
	{{ Form::open( array("route" => "todos.store")) }}
	
		@include('todos.partial._form')

		{{ Form::close() }}

	{{ link_to_route('todos.index', "back") }}
@stop