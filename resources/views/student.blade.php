@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!--  Panels  -->
			<!-- <center> -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Manage Students</h2>
				</div>
				<div class="panel-body" style="overflow-x:auto;">
                    <div class="row">
                        <div class="col-lg-12">
                            <legend>Your Students</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>									
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($users)>0)
                                    @foreach($users->all() as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="/manstudents/{{$user->email}}">
                                                <button class="btn btn-default">
                                                    Manage
                                                </button>                                                
                                            </a>
                                        </td>							
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