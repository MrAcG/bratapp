@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Self Development</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
             <div class="col-lg-4">
                    <img class="img-circle" src="{{URL::asset('/images/e-portfolio.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Manage Schedule</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/schedule')}}" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/tests.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Submit Evidence</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/evidence')}}" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/logical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>History/Logs</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/logs')}}"  role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                 <div class="col-lg-4">
                    <img class="img-circle" src="{{URL::asset('/images/verbal.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Weekly Status Update</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/statusupdate')}}" role="button">Explore &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"   src="{{URL::asset('/images/self-development-plan.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Progress<br>Bar</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/progbar')}}" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle"   src="{{URL::asset('/images/technical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Revive<br>Goal</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <br>
                 <div class="col-lg-4">
                    <img class="img-circle" src="{{URL::asset('/images/judgement.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Goal Evaluation</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"   src="{{URL::asset('/images/analytics.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Goal Analysis</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Explore &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                
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
