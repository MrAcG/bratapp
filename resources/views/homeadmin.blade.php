@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<center>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Manage Students</h2>
					</div>
					<div class="panel-body">
						<!-- Three columns of Tests -->
						<div class="row">
							<div class="col-lg-4">
								<img class="img-circle" src="{{URL::asset('/images/personality-profiling.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>
									Manage Students
								</h3>
								<p>
									<a class="btn btn-default" href="{{url('students')}}" role="button">
									Explore &raquo;
									</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
							<!-- /.col-lg-4 -->
						</div>
					</div>
				</div>
				<!-- /.row -->
				<!-- Three columns of Tests -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">
							Students Details
						</h2>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-4">
								<img class="img-circle" src="{{URL::asset('/images/subjects-brand.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>
									Test Scores
								</h3>
								<p>
									<a class="btn btn-default" href="{{url('/testscores')}}" role="button">
									Explore &raquo;
									</a>
								</p>
							</div>
							{{--  <div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/soft-skills-brand.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>
									Jobs
								</h3>
								<p>
									<a class="btn btn-default" href="{{url('/#')}}" role="button">
									Explore &raquo;
									</a>
								</p>
							</div>  --}}
							<!-- /.col-lg-4 -->
							{{--  <div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/self-development-plan.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>Self Development Plan</h3>
								<p><a class="btn btn-default" href="{{url('/#')}}"  role="button">Explore &raquo;</a>
								</p>
							</div>  --}}
							<!-- /.col-lg-4 -->
							<div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/tests.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>Personality Traits</h3>
								<p><a class="btn btn-default" href="{{url('/personality')}}" role="button">Explore &raquo;</a>
								</p>
							</div>
							<div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/job.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>Feedback</h3>
								<p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
						</div>
					</div>
				</div>
				<!-- /.row -->
				
		</div>
	</div>
	</center>
</div>
</div>
</div>
@endsection