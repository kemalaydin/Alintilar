@extends('template.index')

@section('content')
<div class="page-header"><h1>{{ trans('title.KişiEkleme') }}<small>{{ trans('title.KişiEklemeSmall') }}</small></h1></div>
<div class="well">
    <div class="container">
<div class="control-group">
<div class="col-sm-6">

{{ Form::open(array('url' => 'person', 'method' => 'post')) }}
<label class="control-label" for="inputEmail">{{ trans('title.SözSahibiİsmi') }}</label>
<div class="controls">
{{ Form::text('name','', array('class'=>'form-control')) }}
</div>
{{ Form::submit(trans('title.Kaydet'),array('class'=>'btn btn-primary')) }}
{{ Form::close() }}



</div>
</div>
</div>
</div>

@stop



  