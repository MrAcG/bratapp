@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
            <!-- <center> -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">Your Previous Schedules</h2>
    </div>
    <div class="panel-body">            
    <!-- <div class="row">
    <div class="col-lg-4">
        <img class="img-circle" src="{{URL::asset('/images/e-portfolio.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h3>Add New Schedule</h3>

        <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
        </p>
        </div>
        <div class="col-lg-4">
        <img class="img-circle"  src="{{URL::asset('/images/tests.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h3>Manage Schedules</h3>

        <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
        </p>
    </div>
     


     



    </div> -->

    <div class="row">
        <div class="col-lg-12">
            <legend>Your Past Schedules</legend>
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
                    @else
                    <td colspan="6" style="text-align:center">No previous schedules available</td>
                @endif

              </tbody>
            </table> 

            <a href="{{url('/selfdev')}}" class="btn btn-primary">Back</a>



        </div>
    </div>




    </div>
    </div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
            <!-- /.row -->
        <!--</div>
    </div>
</center>
        </div>
    </div>
</div>
@endsection
