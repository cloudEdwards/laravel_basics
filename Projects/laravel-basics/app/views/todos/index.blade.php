@extends('layouts.main')
	

@section("content")
<h1>All Todo Lists</h1>
	<ul> 
		@foreach ($todo_lists as $list)
		<div class="large-12 columns">
			<h2>
				{{ link_to_route('todos.show', $list->name, [$list->id]) }}

			</h2> 
		</div>
		<ul class="no-bullet button-group ">
			<li>
				{{ link_to_route('todos.edit', 'Edit', [$list->id], ['class'=>"tiny button"])}}				
			</li>
			<li>
				{{ Form::model($list, ['route' => ['todos.destroy', $list->id], 'method'=>'delete' ]) }}
					{{ Form::button('destroy', ['type'=>'submit', 'class'=>'tiny alert button'])}}
				{{ Form::close()}}
			</li>
	
		</ul>
		@endforeach

	</ul>	
	{{ link_to_route('todos.create', "Create New", null,['class'=>"tiny success button"] ) }}
@stop