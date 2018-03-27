@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">View Students Personalities</h2>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12" style="overflow-x:auto;">
                            <legend>Big 5 Test Results</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Personality 1</th>
                                        <th>Personality 2</th>									
                                        <th>Personality 3</th>
                                        <th>Personality 4</th>
                                        <th>Personality 5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($big5)>0)
                                    @foreach($big5->all() as $big5)
                                    <tr>
                                        <td>{{$big5->user_id}}</td>
                                        <td>{{$big5->user_id}}</td>
                                        <td>{{$big5->email}}</td>
                                        <td>{{$big5->personality1}}</td>
                                        <td>{{$big5->personality2}}</td>								
                                        <td>{{$big5->personality3}}</td>
                                        <td>{{$big5->personality4}}</td>
                                        <td>{{$big5->personality5}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>Holland Test Results</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Personality 1</th>
                                        <th>Personality 2</th>									
                                        <th>Personality 3</th>									
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($holland)>0)
                                    @foreach($holland->all() as $holland)
                                    <tr>
                                        <td>{{$holland->user_id}}</td>
                                        <td>{{$holland->user_id}}</td>
                                        <td>{{$holland->email}}</td>
                                        <td>{{$holland->personality1}}</td>
                                        <td>{{$holland->personality2}}</td>								
                                        <td>{{$holland->personality3}}</td>								
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
			    </div>
		    </div>
		<!-- /.row -->
		<!-- Three columns of Tests -->
		<!-- /.row -->
		
        </div>
    </div>    
</div>

@endsection