@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Complete Details</h2>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12" style="overflow-x:auto;">
                            <legend>More Info</legend>
                            {{--  <h4>{{$jobdetail->job}}</h4>	  --}}
                            <br>
                            @if(count($jobdetail)>0)
                            @foreach($jobdetail->all() as $jobdetail)
                            <h4>{{$jobdetail->job}}</h4>
                            <div>
                                <?php 
                                    if ($jobdetail->url) {
                                        $entirecontent = file_get_contents($jobdetail->url);
                                        if (strpos($entirecontent, '<table class="wikitable" border="1">') !== false) {
                                            $reqdcontent = explode('<table class="wikitable" border="1">',explode('</table>', $entirecontent)[0])[1];
                                            if($reqdcontent){
                                                $reqdcontent_final = "<table class='wikitable' border='1'>".$reqdcontent."</table>";
                                                echo($reqdcontent_final);
                                            }
                                            else{
                                                echo "No table Content on the page..";
                                            }
                                        }
                                        else{
                                            echo "Sorry no table...";
                                        }
                                    }                               
                                ?>
                            </div>
                            <br>
                            
                            @endforeach                            
                            @endif
                            <div>
                                <a href="{{$jobdetail->url}}" 
                                    target="_blank" class="btn btn-default" role="button">                                                                    
                                        Read More 
                                </a>
                                <a href="http://google.com/search?q=how+to+become+{{$jobdetail->job}}+study.com&oq=how+to+become+{{$jobdetail->job}}+study.com" 
                                    target="_blank" class="btn btn-default" role="button">                                    
                                        Search the Web                                    
                                </a>
                            </div>
                        </div>
                    </div>                    
                </div>
                
                <h6 style="padding-left:10px">Table Source: &copy;study.com</h6>
		    </div>
		</div>
    </div>
    
</div>

@endsection