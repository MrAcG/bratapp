@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
<center>
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Status Update</h2>
        </div>
        <div class="panel-body">            
            <div class="row">
                <legend>Status Update</legend>
                <h3>Do You Want To Update Your Weekly Status?</h3>
                <a href="{{url('/selfdev')}}" class="btn btn-danger">NO</a>
                <a href="{{url('/manschedule')}}" class="btn btn-primary">YES</a>

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
