@extends('template.index')


@section('content')

	<div clas="col-md-12">
	 <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('title.AlıntılarListesi') }}</h3>
    </div>

	@foreach($Quotes as $quote)


                  <a href="{{ url('quote/'.$quote->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{  $quote->quote }}</h5>

                  <small class="list-group-item-text"> 

                  {{ Lang::get('title.AlıntıDetay', array('name' => $quote->Person->name,'source'=>$quote->Product->name )) }}
                 </small>
                   
               
               	 </a>
              
                  <div style="clear:both;"></div>


    


	@endforeach
	    </div>

	    <center>{{ $Quotes->links(); }}</center>

	</div>

@stop
