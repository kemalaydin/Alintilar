
@extends('layout')

@section('content')
<div class="page-header"><h1>Kişi Ekleme <small>Yeni Bir Söz Sahibi Ekleyin</small></h1></div>
<div class="well">

<div class="input-prepend input-append">

{{ Form::open(array('url' => 'person', 'method' => 'post')) }}
<span class="add-on">Söz Sahibinin İsmi : </span>
{{ Form::text('name','', array('class'=>'span2')) }}
{{ Form::submit('Kaydet',array('class'=>'btn')) }}
{{ Form::close() }}

</div>
</div>

@stop