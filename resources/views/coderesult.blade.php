@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Coding Decoding Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">
                                            @foreach($result as $result)
                                            {{ $result }}/15
                                           @endforeach
                                           <?php $asd=($result/15*100);?>
                                          </div>
                              
                                          <center>
                                          <div class="panel panel-default">
                                          
                                            <div class="panel-body">
                                             <div class="row">
                                          <p style="font-size:20px;">
                                          {{round($asd,2)}}%
                                          <?php
                                          if ($asd <= 35)
                                          {
                                      
                                            echo '<br><p style="font-size:20px;color:red;">You failed to clear the test</p>For easy references and learning please refer to <a href="#">indiabix.com</a>';
                                          }
                                          ?>
                                          </p>
                                          <form method="POST" action="/allresult">
                                           {{ csrf_field() }}
                                          <p align="center" style="position:relative"><button type="submit" href="/allresult" class="btn btn-primary" name="db" value="codetests">
                                    Compare With Older Results
                                </button>
                                          </p>
                                          </form>

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

