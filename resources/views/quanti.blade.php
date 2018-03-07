@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Quantitative Aptitude</h2>
        </div>
        <div class="panel-body"> 

		


  <ul style="list-style:none;position: relative" align="center">
<img class="img-square" src="{{URL::asset('/images/test.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
<li>Total Questions:26
<li>Total Duration:30 mins
  </ul>


<p align="center" style="position:relative"><a class="btn btn-default" href="{{url('/quantitest')}}" role="button">Start The Test</a>
</p>
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
