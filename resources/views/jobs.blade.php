@extends('layouts.app')

@section('content')

<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Jobs best suited for your personality are:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                            @for ($i = 0; $i < count($jobs);$i++)    
                                       <div  style="font-size:12px;" class="col-sm-12 animateFadeIUp ">
                                             
                                            <ul >
                                            <li>{{ $jobs->get($i) }}</li>

                                            </ul>
                                             
                                              
                                          </div>
                                          @endfor
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


@endsection

