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
                        <div class="col-lg-12">
                            <legend>ChangeTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($changetests)>0)
                                    @foreach($changetests->all() as $changetests)
                                    <tr>                           
                                        <td>{{$changetests->email}}</td>
                                        <td>{{$changetests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                           <legend>CodeTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($codetests)>0)
                                    @foreach($codetests->all() as $codetests)
                                    <tr>                           
                                        <td>{{$codetests->email}}</td>
                                        <td>{{$codetests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>CommsTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($commstests)>0)
                                    @foreach($commstests->all() as $commstests)
                                    <tr>                           
                                        <td>{{$commstests->email}}</td>
                                        <td>{{$commstests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>LeaderTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($leadertests)>0)
                                    @foreach($leadertests->all() as $leadertests)
                                    <tr>                           
                                        <td>{{$leadertests->email}}</td>
                                        <td>{{$leadertests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>LogicTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($logictests)>0)
                                    @foreach($logictests->all() as $logictests)
                                    <tr>                           
                                        <td>{{$logictests->email}}</td>
                                        <td>{{$logictests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>QuantiTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($quantitests)>0)
                                    @foreach($quantitests->all() as $quantitests)
                                    <tr>                           
                                        <td>{{$quantitests->email}}</td>
                                        <td>{{$quantitests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>StressTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($stresstests)>0)
                                    @foreach($stresstests->all() as $stresstests)
                                    <tr>                           
                                        <td>{{$stresstests->email}}</td>
                                        <td>{{$stresstests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>TechnicalTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($technicaltests)>0)
                                    @foreach($technicaltests->all() as $technicaltests)
                                    <tr>                           
                                        <td>{{$technicaltests->email}}</td>
                                        <td>{{$technicaltests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>TimeTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($timetests)>0)
                                    @foreach($timetests->all() as $timetests)
                                    <tr>                           
                                        <td>{{$timetests->email}}</td>
                                        <td>{{$timetests->score}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <legend>VerbalTests</legend>						
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>                                        
                                        <th>Email</th>
                                        <th>Score</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($verbaltests)>0)
                                    @foreach($verbaltests->all() as $verbaltests)
                                    <tr>                           
                                        <td>{{$verbaltests->email}}</td>
                                        <td>{{$verbaltests->score}}</td>
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