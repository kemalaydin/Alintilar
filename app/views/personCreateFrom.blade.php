
{{ Form::open(array('url' => 'person', 'method' => 'post')) }}
{{ Form::label('name', 'İsim: ') }}
{{ Form::text('name') }}
{{ Form::close() }}