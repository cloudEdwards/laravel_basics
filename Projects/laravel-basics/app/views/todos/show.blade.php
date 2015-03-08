@extends('layouts.main')

@section("content")
	<div class="large-12 columns">
		<h2>{{{ $list->name }}}</h2>
		@foreach ($items as $item)
			@if($item->completed_on)
			<h4><del>{{{$item->content }}}</del></h4>
			@else
			<h4>{{{$item->content }}}</h4>
			@endif
			<ul class='no-bullet button-group'>
				<li>	
					{{ link_to_route('todos.items.edit', 'Edit', [$list->id, $item->id], ['class'=>"tiny button"])}}
				</li>
				<li>
					{{ Form::model($item, ['route' => ['todos.items.destroy', $list->id, $item->id], 'method'=>'DELETE'] ) }}
					{{ Form::button('Destroy', ['type'=>'submit', 'class'=>'tiny alert button'])}}
					{{ Form::close()}}
				</li>
				@if($item->completed_on == NULL)
				<li>	
					{{ Form::model($item, ['route' => ['todos.items.complete', $list->id, $item->id], 'method'=>'PATCH'] ) }}
					{{ Form::button('Complete', ['type'=>'submit', 'class'=>'tiny success button'])}}
					{{ Form::close()}}
				</li>
				@endif
			</ul>	
		@endforeach

	{{ link_to_route('todos.items.create', "Add Task", [$list->id],['class'=>"tiny success button"] ) }}

	<p>{{ link_to_route('todos.index', "back") }}</p>
	</div>
	
	
@stop


