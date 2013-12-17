@extends('layout')


@section('content')

<div class="page-header"><h1>" Alıntı " Paylaş<small>Yeni Bir Alıntı Paylaşın</small></h1></div>
<div class="well">

<div class="input-prepend input-append">

	{{ Form::open (array('url'=>'quote','method','post')) }}
	<span class="add-on">Alıntı Yapılan Kişi : </span>
	{{ Form::text('person_name','',array('class'=>'span2')) }}

	<span class="add-on">Alıntı : </span>
	{{ Form::textarea('quote','',array('class'=>'span2')) }}

	<span class="add-on">Alıntı Yapılan Eserin Adı : </span>
	{{ Form::text('product_name', '';array('class' => 'span2')) }}
	{{ Form::submit(' " Alıntı " Gönder ',array('class'=>'btn')) }}
	{{ Form::close() }}

	</div>
	</div>

@stop