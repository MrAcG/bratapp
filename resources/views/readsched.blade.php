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
							<p class="lead"><b>PROGRESS BAR :</b></p>
							<?php $abc= $schedules->progcomp; ?>
							<div id="myProgress" style="width: 100%; background-color: #ddd;">
	  							<div id="myBar" style="width: <?php echo $abc;?>%;height: 30px;background-color: #4CAF50;text-align: center;ine-height: 30px;color: white;">
	  								{{$schedules->progcomp}} %
  								</div>  								
  							</div><br>
  							<?php $currentDate = strtotime(date('Y-m-d'));$day2=strtotime($schedules->enddate); $diff=ceil(($day2 - $currentDate) / 86400) ?>
  							<p class="lead"><b>EVALUATION :</b><br>
  								<?php
  									if ($diff>0) {
  									 	echo "You have <b>".$diff."</b> days left to complete your task";
  									}
  									elseif ($diff==0) {
  										echo "Hurry up. Your deadline is today";
  									}
  									else{
  										echo "You have already past the deadline by <b>".abs($diff)."</b> days";
  									} 
  								?>
  							</p> 
						</div>
					</div>
		        </div>
		    </div>
        </div>
    </div>
</div>
@endsection
