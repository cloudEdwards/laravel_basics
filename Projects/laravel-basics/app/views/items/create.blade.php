@extends('layouts.main')

@section("content")
	{{ Form::open( array("route" => ["todos.items.store", $todo_list->id])) }}
	
		@include('items.partial._form')

		{{ Form::close() }}

	{{ link_to_route('todos.index', "back") }}
@stop