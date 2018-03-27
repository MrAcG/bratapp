@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Manage Schedules</h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<legend>Your Schedules</legend>
							@if(session('info'))
							<div class="alert alert-success">
								{{session('info')}}
							</div>
							@endif
							<table class="table table-striped table-hover ">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th>Description</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if(count($schedules)>0)
									@foreach($schedules->all() as $schedule)
									<tr>
										<td>{{$schedule->id}}</td>
										<td>{{$schedule->title}}</td>
										<td>{{$schedule->description}}</td>
										<td>{{$schedule->startdate}}</td>
										<td>{{$schedule->enddate}}</td>
										<td>
											<a href='{{url("/read/{$schedule->id}")}}' class="label label-primary">View</a> |
											<a href='{{url("/update/{$schedule->id}")}}' class="label label-success">Update</a> |
											<a href='{{url("/delete/{$schedule->id}")}}' class="label label-danger">Delete</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<a href="{{url('/schedule')}}" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection