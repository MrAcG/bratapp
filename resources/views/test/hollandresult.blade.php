@extends('layouts.app')

@section('content')

<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Holland Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                             
                                            <ul>
                                           @foreach($personalities as $personality)
                                           <li> {{ $personality }}</li>
                                           @endforeach
                                            </ul>
                                            
                                             
                                              
                                          </div>
                                          
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


@endsection

