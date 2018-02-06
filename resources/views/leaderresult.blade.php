@extends('layouts.app')

@section('content')

<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Leader Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">
                                           @foreach($result as $result)
                                            {{ $result }}/85
                                           @endforeach

                                            <p align="center"><a class="btn btn-default" href="{{url('/allresult')}}" role="button">Compare with Previous Results</a>
                                            </p>
                                          

                                          </div>
                                          
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


@endsection

