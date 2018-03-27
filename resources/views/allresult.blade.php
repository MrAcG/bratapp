@extends('layouts.app')

@section('content')
<script src="{{ asset('js/canvasjs.min.js') }}"></script>
  <script type="text/javascript">

    window.onload=function(){
      var chart=new CanvasJS.Chart("chartContainer",{
      data: [
      {
        type:"column",
        dataPoints: [
          <?php     
          foreach($score as $rows)
          {
            echo "{label:'',y:{$rows->score}},";
          }
          ?>

        ]
      }],

    });
      chart.render();
      
    }
  </script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
                          
                              <h2 class="text-center"><span class="page-heading">Time Management Test Results:</span></h2>
                                    
                              <div id="chartContainer" style="width: 90%;height :80%"></div>
                                          
                                          </div>
                                            </div>
                                            </center>
                                            </div>

                                   </div>


                               </div>
</div>


@endsection

