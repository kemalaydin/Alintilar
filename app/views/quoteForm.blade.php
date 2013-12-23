@extends('template.index')

@section('css')
<link rel="stylesheet" href="{{ asset('css/ui-lightness/jquery-ui-1.10.3.custom.css') }}" type="text/css" media="screen" charset="utf-8" />

@stop

@section('javascript')

<script type="text/javascript" src="{{ asset('js/jquery-ui-1.10.3.custom.js') }}"></script> 
<script type="text/javascript">


//TODO ajaxı düzelt
//http://stackoverflow.com/questions/9232748/twitter-bootstrap-typeahead-ajax-example
//http://stackoverflow.com/questions/12621823/ajax-call-populate-typeahead-bootstrap
$( document ).ready(function() {

	$( "input[name='person_name']" ).autocomplete({
		 source: function( request, response ) {
			$.ajax({
				url: "{{ url('person_ajax')}}",
				dataType: "jsonp",
				data: {
					featureClass: "P",
					style: "full",
					maxRows: 12,
					name_startsWith: request.term
				},
				success: function( data ) {
					response( $.map( data.geonames, function( item ) {
						return {
						label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
						value: item.name
						}
					}));
				}
			});
		},
		minLength: 2,
		select: function( event, ui ) {
		alert( ui.item ?
		"Selected: " + ui.item.value + " aka " + ui.item.id :
		"Nothing selected, input was " + this.value );
		}
	});
});
</script>


@stop

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
