@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
			<!-- <center> -->
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Read Schedule</h2>
			</div>
			<div class="panel-body">            
				<div class="row">
					<div class="col-lg-12">
						<legend>Your Schedule</legend>
						<p class="lead"><b>TITLE :</b><br>{{$schedules->title}}</p>
						<p class="lead"><b>DESCRIPTION :</b><br>{{$schedules->description}}</p>
						<p class="lead"><b>START DATE :</b><br>{{$schedules->startdate}}</p>
						<p class="lead"><b>END DATE :</b><br>{{$schedules->enddate}}</p>
						<p class="lead"><b>PERCENT COMPLETE :</b><br>{{$schedules->progcomp}} %</p>
					</div>
		        </div>
		    </div>
        </div>
    </div>
</div>
@endsection
