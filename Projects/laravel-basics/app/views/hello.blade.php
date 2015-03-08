@extends('layouts.main')

@section("content")
	@if(isset($data['asd']))
		{{{ $data['asd'] }}}
	@else
	@endif

	@foreach ($data as $item)
		<li>{{{ $item }}}</li>


	@endforeach 
@stop