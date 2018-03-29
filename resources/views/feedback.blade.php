@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Feedback</h2>
					</div>
						<div class="panel-body">            
						
						<div class="row">
							<div class="col-md-8">

								<form class="form-horizontal" method="POST" action="{{url('/feedback')}}">
									{{ csrf_field() }}
									<fieldset>
									<legend>Provide Feedback</legend>
									@if(count($errors)>0)
										@foreach($errors->all() as $error)
											<div class="alert alert-danger">
												{{$error}}
											</div>
										@endforeach
									@endif
									<div class="form-group">
										<label for="title" class="col-lg-4 control-label">Sending Feedback to:</label>
										<div class="col-lg-8">
											<div class="col-md-10 form-control-static">
                                                {{$email}}
                                            </div>
										</div>
									</div>
                                    <input type="hidden" name="email" value="{{$email}}" />
									<input type="hidden" name="read" value="NO" />
								<input type="hidden" name="from" value="{{Auth::user()->email}}" />
									<div class="form-group">
										<label for="message" class="col-lg-4 control-label">Feedback</label>
											<div class="col-lg-8">
											<textarea class="form-control" rows="3" id="message" name="message"></textarea>
											<!-- <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span> -->
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2">
											<button type="submit" class="btn btn-primary">Submit</button>
											<a href="/manstudents/{{$email}}" class="btn btn-primary">Back</a>
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
