
{{Form::label("content", 'Task')}}
{{$errors->first('content', '<small class="error">:message</small>')}}

{{Form::text("content")}}
{{Form::submit("Done", array('class'=> 'button'))}}