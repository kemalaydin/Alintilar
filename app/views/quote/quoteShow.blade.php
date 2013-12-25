@extends('template.index')


@section('javascript')
<script>
  $(document).ready(function() {
  
    var nicesx = $("#kisitla").niceScroll({touchbehavior:false,cursorcolor:"#333333",cursoropacitymax:0.6,cursorwidth:8});
    
  });
</script>
@stop




@section('content')

	<div class="col-md-8">	

<div class="panel panel-info">
	 
  
  
	
	@foreach($QuoteDetay as $quotee)
	<div class="panel-heading">
		<b> {{ $quotee->quote }} </b>
	</div>
  <div class="panel-body">
  	
  	Bu Alıntı <b> <a href="{{ url('person/'.$quotee->person->id) }}">{{ $quotee->person->name }} </b></a> 'nın <b> {{ $quotee->product->name }} </b> eserinden alınmıştır.
  	<span class="label label-success">Oluşturulma Tarihi : {{ $quotee->created_at }}</span>

  </div>
	@endforeach

</div>
</div>
@stop


@section('rightPanel')
<div class="col-md-4">
	 <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Alıntı Yapılan Kişiler</h3>
                </div>

                <div class="kisitla" id="kisitla">

                @foreach($People as $Person)

                  <a href="{{ url('person/'.$Person->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{ $Person->name }}</h5>
                 </a>
              
                  <div style="clear:both;"></div>

                @endforeach

                </div>

                
                  
        </div>
</div>
@stop