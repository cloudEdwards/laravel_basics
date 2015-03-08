
{{Form::label("name", 'Title')}}
{{$errors->first('name', '<small class="error">:message</small>')}}
{{Form::text("name")}}
{{Form::submit("Update", array('class'=> 'button'))}}



