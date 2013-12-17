
{{ Form::open(array('url' => 'type', 'method' => 'post')) }}
{{ Form::label('type', 'Tip: ') }}
{{ Form::text('type') }}
{{ Form::close() }}