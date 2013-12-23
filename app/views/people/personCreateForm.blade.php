@extends('template.index')

@section('content')
<div class="page-header"><h1>Kişi Ekleme <small>Yeni Bir Söz Sahibi Ekleyin</small></h1></div>
<div class="well">
    <div class="container">
<div class="control-group">
<div class="col-sm-6">

{{ Form::open(array('url' => 'person', 'method' => 'post')) }}
<label class="control-label" for="inputEmail">Söz Sahibinin İsmi </label>
<div class="controls">
{{ Form::text('name','', array('class'=>'form-control')) }}
</div>
{{ Form::submit('Kaydet',array('class'=>'btn btn-primary')) }}
{{ Form::close() }}



</div>
</div>
</div>
</div>

@stop



  