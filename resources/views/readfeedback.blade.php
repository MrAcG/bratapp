@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">View Detailed Feedback</h2>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12" style="overflow-x:auto;">
                            <legend>Your Detailed Feedback</legend>	  
                            @if(count($feedback)>0)
                            @foreach($feedback->all() as $feedback)    
                            <div>
                                <div>
                                    <legend>From</legend>
                                    <?php $from=\DB::table('users')->where('email', $feedback->from)->get()->pluck('name');?>
                                    <span>Prof. <?php print($from[0]); ?></span><br><br>
                                </div>                        
                                <div>
                                    <legend>Feedback</legend>
                                    <span>{{$feedback->message}}</span><br><br>
                                </div>
                                <div>
                                    <legend>Date Sent</legend>
                                    <span>{{$feedback->created_at}}</span><br><br>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <span colspan="3" style="text-align:center">Please don't try to read someone else's feedback</span>
                            @endif                            
                                                      
                        </div>
                    </div>
			    </div>
		    </div>
        </div>
    </div>    
</div>

@endsection