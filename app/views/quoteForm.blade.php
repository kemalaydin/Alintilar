@extends('layout')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/jquery.autocomplete.js') }}"></script> 
<script type="text/javascript">

$( document ).ready(function() {
	
alert('naber');



});

</script>


@end

@section('content')

<div class="page-header"><h1>Alıntı Paylaş <small>Yeni Bir Alıntı Paylaşın</small></h1></div>
<div class="well">

<div class="input-prepend">

	{{ Form::open (
		array(
		'url'=> 'quote',
				'method',
				'post',
		'class'=>'form-horizontal'
		)) 
	}}



	<div class="control-group">
    <label class="control-label" for="inputEmail">Alıntı Yapılan Kişi</label>
    <div class="controls">
	{{ Form::text('person_name','',array('class'=>'form-control')) }}
	</div>
	</div>

	<div class="control-group">
    <label class="control-label" for="inputEmail">Alıntı</label>
    <div class="controls">
	{{ Form::textarea('quote','',array('class'=>'form-control','rows'=>'3')) }}
	</div></div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Alıntı Yapılan Eserin Adı</label>
    <div class="controls">
	
	{{ Form::text('product_name','',array('class'=>'form-control')) }}
	<br/><br/>
	{{ Form::submit('Alıntı Gönder ',array('class'=>'btn btn-large btn-success')) }}
	{{ Form::close() }}

	</div>
	</div>

@stop
