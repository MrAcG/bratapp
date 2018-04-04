@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Time Management Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">
                                            @foreach($result as $result)
                                            {{ $result }}/75
                                           @endforeach
                                           <?php $asd=($result/75*100);?>
                                          </div>
                              
                                          <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row">
                                          <p style="font-size:20px;">
                                          {{round($asd,2)}}%
                                          </p>
                                          <p align="center" style="position:relative"><a class="btn btn-default" href="{{url('/allresult')}}" role="button">Compare Older Results</a>
                                          </p>

                                          </div>
                                          </div>
                                            </div>
                                            </center>
                                            </div>
                                          
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


@endsection

