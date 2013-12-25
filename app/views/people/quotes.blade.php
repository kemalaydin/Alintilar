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
	
	 <div class="panel panel-default">
                
				<div class="panel-heading">
                    <h3 class="panel-title"><b> {{ $person->person->name; }} </b> Alıntıları</h3>
                </div>

   
              @foreach($quotes as $quote)
              
                  <a href="{{ url('quote/'.$quote->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{  $quote->quote }}</h5>
                  <small class="list-group-item-text"><b> {{ $quote->person->name }} </b> 'dan alıntı yapıldı <span class="green-color"></span></small>
                   	 <div style="float:right;">
          

                  

					<label class="label label-primary">Facebook'ta Paylaş</label>

                  	
                  	<span class="label label-info">Tweetle</span>

                  </div> 
                
               	 </a>
              
                  <div style="clear:both;"></div>

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