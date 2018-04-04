

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Stress Management Test Results:</span></h2>
                                    
                              <div class="row">


                                  <div class="col-sm-12 animateFadeInUp">
                           
                                      
                                      <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row"> 
                                             
                                              
                                       <div  style="font-size:30px;" class="col-sm-12 animateFadeIUp ">    @foreach($result as $result)
                                          {{ $result }}/60
                                           @endforeach 
                                           <?php $asd=($result/60*100);?>                    
                                          <div class="panel panel-default">
                                          <center>
                                            <div class="panel-body">
                                             <div class="row">


                                          <h1 style="font-size:15px;">Result Graph</h1>
                                          <div style="height: 450px;width: 100%;background-color: #ddd;position: relative;"><br>                                    
                                          <p style="text-align: left;font-size:18px;">100%</p><br><br>
                                          <p style="text-align: left;font-size:18px;">80%</p><br><br> 
                                          <p style="text-align: left;font-size:18px;">60%</p><br><br> 
                                          <p style="text-align: left;font-size:18px;">40%</p><br><br> 
                                          <p style="text-align: left;font-size:18px;">20%</p><br>         <p style="text-align: left;font-size:18px;">10%</p>
                                        <div id="myBar" style="position:absolute;bottom: 0;right:50%;width: 30px;height:<?php echo $asd;?>%;background-color: #4CAF50;text-align: center;color: white;bottom:0px;">

                                          </div>
                                          </div>
                                          <p style="font-size:20px;">
                                          {{round($asd,2)}}%
                                        </p>
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

