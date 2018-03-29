@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Add Schedules</h2>
					</div>
						<div class="panel-body">            
						
						<div class="row">
							<div class="col-md-8">

								<form class="form-horizontal" method="POST" action="{{url('/insertsched')}}">
									{{ csrf_field() }}
									<fieldset>
									<legend>Add New Schedule</legend>
									@if(count($errors)>0)
										@foreach($errors->all() as $error)
											<div class="alert alert-danger">
												{{$error}}
											</div>
										@endforeach
									@endif
									<div class="form-group">
										<label for="title" class="col-lg-4 control-label">Title</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="title" placeholder="Title" name="title">
										</div>
									</div>

									<div class="form-group">
										<label for="description" class="col-lg-4 control-label">Description</label>
											<div class="col-lg-8">
											<textarea class="form-control" rows="3" id="description" name="description"></textarea>
											<!-- <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span> -->
										</div>
									</div>
									<div class="form-group">
										<label for="startdate" class="col-lg-4 control-label">Start Date</label>
										<div class="col-lg-8">
											<input type="date" class="form-control" id="startdate" placeholder="Start Date" name="startdate">
										</div>
									</div>
									<div class="form-group">
										<label for="enddate" class="col-lg-4 control-label">End Date</label>
										<div class="col-lg-8">
											<input type="date" class="form-control" id="enddate" placeholder="End Date" name="enddate">
										</div>
									</div>
									<div class="form-group">
										<label for="progcomp" class="col-lg-4 control-label">Percent Completed</label>
										<div class="col-lg-8">
											<input type="number" class="form-control" rows="3" id="progcomp" placeholder="0" name="progcomp">
											<!-- <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span> -->
										</div>
									</div>
									{{--  <input type="hidden" name="email" value="{{Auth::user()->email}}" />  --}}
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2">
											<button type="submit" class="btn btn-primary">Submit</button>
											<a href="{{url('/schedule')}}" class="btn btn-primary">Back</a>
										</div>
									</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
            <!-- /.row -->
        <!--</div>-->
   			 </div>

        </div>
    </div>
</div>
@endsection
