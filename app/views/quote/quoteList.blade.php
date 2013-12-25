@extends('template.index')


@section('content')

	<div clas="col-md-12">
	 <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Alıntılar Listesi</h3>
    </div>

	@foreach($Quotes as $quote)


                  <a href="{{ url('quote/'.$quote->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{  $quote->quote }}</h5>
                  <small class="list-group-item-text"><b> {{ $quote->Person->name }} </b> 'dan alıntı yapıldı <span class="green-color">( Kaynak : <b> {{ $quote->Product->name }} </b> )</span></small>
                   	    <div style="float:right;">
         
                  </div>
               
               	 </a>
              
                  <div style="clear:both;"></div>


    


	@endforeach
	    </div>

	    <center>{{ $Quotes->links(); }}</center>

	</div>

@stop
