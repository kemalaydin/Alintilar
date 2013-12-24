@extends('template.index')


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
          

            <!--       	<a target="_blank" href="http://www.facebook.com/sharer.php?s=100
					&p[url]={{ url('quote/'.$lastQuote->id ) }}
					&p[title]={{ $lastQuote->quote }}
					&p[summary]={{ $lastQuote->Person->name }} 'dan alıntı yapıldı ( Kaynak : {{ $lastQuote->Product->name }} )"  -->

					<label class="label label-primary">Facebook'ta Paylaş</label>

                  	
                  	<span class="label label-info">Tweetle</span>

                  </div>
               
               	 </a>
              
                  <div style="clear:both;"></div>

                @endforeach

                @foreach($People as $Person)

                	{{ $Person->name }}

                @endforeach

                
                  
        </div>
                

</div>
@stop
