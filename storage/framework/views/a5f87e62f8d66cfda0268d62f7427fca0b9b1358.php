<?php $__env->startSection('content'); ?>

<div class="container">
	<canvas id="barChart"></canvas>
</div>
<script>
  $(document).ready(function(){
      var ctxB = document.getElementById("barChart").getContext('2d');
      var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
          labels: ["Test 1", "Test 2", "Test 3", "Test 4", "Test 5"],
          datasets: [{
              label: 'Score',
              <?php 
              if(count($score)==5){
                echo("data: [".$score[0].",".$score[1].",".$score[2].",".$score[3].",".$score[4]."],");
              } elseif (count($score)==4){
                echo("data: [".$score[0].",".$score[1].",".$score[2].",".$score[3]."],");
              }
              elseif (count($score)==3){
                echo("data: [".$score[0].",".$score[1].",".$score[2]."],");
              }
              elseif (count($score)==2){
                echo("data: [".$score[0].",".$score[1]."],");
              }
              elseif (count($score)==1){
                echo("data: [".$score[0]."],");
              } else {
                echo ("No Results");
              }

              ?>
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  }); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>