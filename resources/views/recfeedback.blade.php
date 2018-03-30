@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">View Feedback</h2>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12" style="overflow-x:auto;">
                            <legend>Your Feedback</legend>						
                            <table class="table table-striped table-hover " style="table-layout: fixed; word-wrap: break-word;">
                                <thead>
                                    <tr>
                                        {{--  <th>#</th>
                                        <th>ID</th>  --}}
                                        {{--  <th>Email</th>  --}}
                                        <th>From</th> 
                                        <th>Feedback</th>
                                        <th>Date Sent</th>
                                                                              
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($feedback)>0)
                                    @foreach($feedback->all() as $feedback)
                                    <?php 
                                        $from=\DB::table('users')->where('email', $feedback->from)->get()->pluck('name');
                                        // echo($from);
                                    ?>
                                    <tr>
                                        {{--  <td>{{$feedback->id}}</td>
                                        <td>{{$feedback->id}}</td>  --}}
                                        {{--  <td>{{$feedback->email}}</td>  --}}
                                        <td><?php print($from[0]); ?></td>								
                                        @if (strlen($feedback->message)<=100)
                                        <td>{{$feedback->message}}</td>
                                        @else
                                        <?php $small = substr($feedback->message, 0, 100); ?>
                                        <td>
                                            <span class="teaser">
                                                {{$small}}
                                            </span>                                            
                                            <a href="/readfeedback/{{$feedback->id}}"><button class="btn btn-default" >Read More</button></a>
                                            </td>
                                        @endif
                                        <td>{{$feedback->created_at}}</td>                                        
                                    </tr>
                                    @endforeach
                                    @else
                                    <td colspan="3" style="text-align:center">No feedback has been received yet</td>
                                    @endif
                                </tbody>
                            </table>                            
                        </div>
                    </div>
			    </div>
		    </div>
        </div>
    </div>    
</div>

@endsection