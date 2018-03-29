@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<center>				
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
									<a class="btn btn-default" href="/testscores/{{$studentemail}}" role="button">
									Explore &raquo;
									</a>
								</p>
							</div>
							
							<div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/tests.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>Personality Traits</h3>
								<p><a class="btn btn-default" href="/personality/{{$studentemail}}" role="button">Explore &raquo;</a>
								</p>
							</div>
							<div class="col-lg-4">
								<img class="img-circle"  src="{{URL::asset('/images/job.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
								<h3>Feedback</h3>
								<p><a class="btn btn-default" href="/feedback/{{$studentemail}}" role="button">Explore &raquo;</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
						</div>
					</div>
				</div>
				<!-- /.row -->
			</center>	
		</div>
	</div>
	
</div>
@endsection