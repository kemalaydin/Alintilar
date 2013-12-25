@extends('template.index')

@section('content')
	
	<div class="col-md-12">
		
		 <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Kişiler Listesi</h3>
                </div>


		@foreach($People as $person)

			
               

                  <a href="{{ url('person/'.$person->id ) }}"  class="list-group-item">
                  <h5 class="list-group-item-heading">{{  $person->name }}</h5>
               	 </a>
              


                  
        

		@endforeach

</div>
            
<center>{{ $People->links(); }}</center>
		
		

	</div>

@stop