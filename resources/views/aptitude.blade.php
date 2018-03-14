@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
 <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Aptitute Tests</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
             <div class="col-lg-4">
                    <img class="img-circle" src="{{URL::asset('/images/quantitative.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Quantitative Aptitude</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/quanti')}}" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/verbal.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Verbal,Grammatical Reasoning</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/verbal')}}" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/coding.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Coding Decoding</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/code')}}" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <img class="img-circle"  src="{{URL::asset('/images/technical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Technical Test</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/technical')}}" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-3">
                    <img class="img-circle"  src="{{URL::asset('/images/logical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Logical Reasoning</h3>
                     
                    <p><a class="btn btn-default" href="{{url('/logic')}}" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
            

                <!-- /.col-lg-4 -->
                <!-- <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/analytics.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Analytical Reasoning</h3>
                     
                    <p><a class="btn btn-default" href="#"  role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                /.col-lg-4
                 <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/coding.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Coding Decoding</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/technical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Technical Tests</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                
                <div class="col-lg-4">
                    <img class="img-circle"  src="{{URL::asset('/images/logical.png')}}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Logical Reasoning</h3>
                     
                    <p><a class="btn btn-default" href="#" role="button">Take The Test &raquo;</a>
                    </p>
                </div>
                /.col-lg-4
                            </div> -->
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
