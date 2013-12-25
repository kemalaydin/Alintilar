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
                    <h3 class="panel-title">Yeni Gönderilen Alıntılar</h3>
                </div>

                @foreach($lastQuotes as $lastQuote)

                  <a href="{{ url('quote/'.$lastQuote->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{  $lastQuote->quote }}</h5>
                  <small class="list-group-item-text"><b> {{ $lastQuote->Person->name }} </b> 'dan alıntı yapıldı <span class="green-color">( Kaynak : <b> {{ $lastQuote->Product->name }} </b> )</span></small>
                   	    <div style="float:right;">
         
                  </div>
               
               	 </a>
              
                  <div style="clear:both;"></div>

                @endforeach


                <center> <?php echo $lastQuotes->links(); ?> </center>



                  
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

                @foreach($rightPeople as $Person)

                  <a href="{{ url('person/'.$Person->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{ $Person->name }}</h5>
                 </a>
              
                  <div style="clear:both;"></div>

                @endforeach

                </div>

                
                  
        </div>
</div>
@stop