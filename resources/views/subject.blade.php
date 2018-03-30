@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Subjects</h2>
					</div>
					<div class="panel-body">    
						<div class="row">
							<div class="col-lg-12">
                                <fieldset>
                                <legend>
                                    Jobs best suited for your personality are:
                                </legend>
                                <h5>Click on the job to find the subjects needed to be studied</h5>                                    
                                <center> 
                                @if(count($jobs)==0)
                                    <p>Please give the BIG 5 and Holland Tests to get your customised job fields</p>
                                @else 
                                    @for ($i = 0; $i < count($jobs);$i++)    
                                        <div  style="font-size:12px;">                                
                                        <p> 
                                            {{--  <a href="http://google.com/search?q=how+to+become+{{$jobs[$i]}}+study.com&oq=how+to+become+{{$jobs[$i]}}+study.com" target="_blank">                                              --}}
                                                <a class="btn btn-default btn-block" href="/subject/{{$jobs[$i]}}" role="button"> {{ $jobs->get($i) }}</a>
                                                {{--  <button class="btn btn-default btn-block">
                                                    {{ $jobs->get($i) }}
                                                </button>    --}}
                                            {{--  </a>  --}}
                                        </p>
                                        </div>
                                    @endfor 
                                @endif
                                </center>
                                </fieldset>
							</div>
                        </div>                    
					</div>
				</div>            
   			 </div>
        </div>
    </div>
</div>
@endsection