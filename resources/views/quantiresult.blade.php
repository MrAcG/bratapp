@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Quantitative Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">
                                           <div class="w3-padding-32 w3-green w3-circle w3-center">
                                            @foreach($result as $result)
                                            {{ $result }}/20
                                           @endforeach
                                          </div>
                              
                                          <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row">


                                          <h1 style="font-size:15px;">Result Graph</h1>

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

