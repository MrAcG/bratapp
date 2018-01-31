@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Schedule</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
             <div class="col-lg-4">
                    <img class="img-circle" src="{{URL::asset('/images/e-portfolio.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Add New Schedule</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/addschedule')}}" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/tests.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Manage Schedules</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/manschedule')}}" role="button">Explore &raquo;</a>
                    </p>
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
