<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
    <form method="POST" action="/quantitestSubmit">
    <?php echo e(csrf_field()); ?>

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Quantitative Aptitude</h2>
        </div>
        <div class="panel-body"> 
        <h3>Question 1</h3>
		<p>How many litres of a 12 litre mixture containing milk and water in the ratio of 2 : 3 be replaced with pure milk so that the resultant mixture contains milk and water in equal proportion?</p>
        <input type="radio" name="op1" value="0">1 liter<br><br>
        <input type="radio" name="op1" value="0">1.5 liter<br><br>
        <input type="radio" name="op1" value="1">2 liter<br><br>
        <input type="radio" name="op1" value="0">4 liter<br><br>


            </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 2</h3>
        <p>A sample of x x litres from a container having a 60 litre mixture of milk and water containing milk and water in the ratio of 2 : 3 is replaced with pure milk so that the container will have milk and water in equal proportions. What is the value of x ?</p>
        <input type="radio" name="op2" value="0">6 liter<br><br>
        <input type="radio" name="op2" value="1">10 liter<br><br>
        <input type="radio" name="op2" value="0">30 liter<br><br>
        <input type="radio" name="op2" value="0">None of the Above<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 3</h3>
        <p>In a 3600 m race around a circular track of length 400m, the faster runner and the slowest runner meet at the end of the fourth minute, for the first time after the start of the race. All the runners maintain uniform speed throughout the race. If the faster runner runs at thrice the speed of the slowest runner. Find the time taken by the faster runner to finish the race.</p>
        <input type="radio" name="op3" value="0">36 min<br><br>
        <input type="radio" name="op3" value="1">24 min<br><br>
        <input type="radio" name="op3" value="0">16 min<br><br>
        <input type="radio" name="op3" value="0">12 min<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 4</h3>
        <p>A man driving his bike at 24 kmph reaches his office 5 minutes late. Had he driven 25 25 faster on an average he would have reached 4 minutes earlier than the scheduled time. How far is his office?</p>
        <input type="radio" name="op4" value="0">24 km<br><br>
        <input type="radio" name="op4" value="0">72 km<br><br>
        <input type="radio" name="op4" value="1">18 km<br><br>
        <input type="radio" name="op4" value="0">Data Insufficient<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 5</h3>
        <p>Twenty six men - 1,2,3,....25 and 26 participate in 10km running race on a circular track of length 100m. All of them start at the same time, from the same point and run in the same direction. Their speeds, taken in the order, are in increasing AP AP . The time taken by 26 to meet 1, for the first time after they start is 20 sec and the time taken by 13 to complete the race is 52 minutes and 5 seconds. Find the time taken (in seconds), for all the twenty six men to meet for the first time at the starting point.</p>
        <input type="radio" name="op5" value="0">1000<br><br>
        <input type="radio" name="op5" value="1">500<br><br>
        <input type="radio" name="op5" value="0">625<br><br>
        <input type="radio" name="op5" value="0">400<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 6</h3>
        <p>Two motorists Anil and Sunil are practicing with two different sports car; Ferrari and Maclarun, on the circular racing track, for the car racing tournament to be held next month. Both Anil and Sunil start from the same point on the circular track. Anil completes one round of the track in 1 min and Sunil takes 2 min to complete a round. While Anil maintains speed for all the rounds, Sunil halves his speed after the completion of each round. How many times Anil and Sunil will meet between 6th round and 9th round of Sunil (6th and 9th round is excluded)? Assume that the speed of Sunil remains steady throughout each round and changes only after the completion of that round.</p>
        <input type="radio" name="op6" value="1">382<br><br>
        <input type="radio" name="op6" value="0">347<br><br>
        <input type="radio" name="op6" value="0">260<br><br>
        <input type="radio" name="op6" value="0">None of these<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 7</h3>
        <p>How many litres of water should be added to a 30 litre mixture of milk and water containing milk and water in the ratio of 7 : 3 such that the resultant mixture has 40% water in it?</p>
        <input type="radio" name="op7" value="1">5<br><br>
        <input type="radio" name="op7" value="0">7<br><br>
        <input type="radio" name="op7" value="0">10<br><br>
        <input type="radio" name="op7" value="0">None of these<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 8</h3>
        <p>Yana and Gupta leave points x and y towards y and x respectively simultaneously and travel in the same route. After meeting each other on the way, Yana takes 4 hours to reach her destination, while Gupta takes 9 hours to reach his destination. If the speed of Yana is 48 km/hr, what is the speed of Gupta?</p>
        <input type="radio" name="op8" value="0">72 kmph<br><br>
        <input type="radio" name="op8" value="0">39 mph<br><br>
        <input type="radio" name="op8" value="1">32 kmph<br><br>
        <input type="radio" name="op8" value="0">None of these<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 9</h3>
        <p>From a cask of milk containing 30 litres, 6 litres are drawn out and the cask is filled up with water. If the same process is repeated a second, then a third time, what will be the number of litres of milk left in the cask?</p>
        <input type="radio" name="op9" value="0">5.12 liter<br><br>
        <input type="radio" name="op9" value="0">12 liter<br><br>
        <input type="radio" name="op9" value="0">14.38 liter<br><br>
        <input type="radio" name="op9" value="1">15.36 liter<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 10</h3>
        <p>How many kgs of Basmati rice costing Rs.42/kg should a shopkeeper mix with 25 kgs of ordinary rice costing Rs.24 per kg so that he makes a profit of 25% on selling the mixture at Rs.40/kg?</p>
        <input type="radio" name="op10" value="1">20 kg<br><br>
        <input type="radio" name="op10" value="0">12.5 kg<br><br>
        <input type="radio" name="op10" value="0">16 kg<br><br>
        <input type="radio" name="op10" value="0">200 kg<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 11</h3>
        <p>Laila drives to the station each day to pick up her husband Majnu, who usually arrives on a train at 6 o�clock. Last Monday, Majnu finished work earlier, caught an earlier train and arrived at the station at 5 �o clock. He started to walk home and eventually met Laila who drove him the rest of the way, getting home 20 minutes earlier than usual. On Tuesday, he again finished early and found himself at the station at 5:30. Again he began to walk home, again he met Laila on the way, and she drove him home the rest of the way, Assume constant speed throughout with no wasted time for waiting, backing of the car etc. How earlier than the usual time were they home on Tuesday?</p>
        <input type="radio" name="op11" value="0">6 min<br><br>
        <input type="radio" name="op11" value="0">8 min<br><br>
        <input type="radio" name="op11" value="1">10 min<br><br>
        <input type="radio" name="op11" value="0">12 min<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 12</h3>
        <p>Two friends A and B run around a circular track of length 510 metres, starting from the same point, simultaneously and in the same direction. A who runs faster laps B in the middle of the 5th 5th round. If A and B were to run a 3 km race long race, how much start, in terms of distance, should A give B so that they finish the race in a dead heat?</p>
        <input type="radio" name="op12" value="0">545.45 m<br><br>
        <input type="radio" name="op12" value="1">666.67 m<br><br>
        <input type="radio" name="op12" value="0">857.12 m<br><br>
        <input type="radio" name="op12" value="0">Cannot be determined<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 13</h3>
        <p>In what ratio must a person mix three kinds of wheat costing him Rs 1.20,Rs 1.44 and Rs 1.74 per Kg so that the mixture may be worth Rs 1.41 per Kg?</p>
        <input type="radio" name="op13" value="1">11:77:7<br><br>
        <input type="radio" name="op13" value="0">25:45:8<br><br>
        <input type="radio" name="op13" value="0">27:23:6<br><br>
        <input type="radio" name="op13" value="0">11:45:7<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 14</h3>
        <p>A merchant mixes three varieties of rice costing Rs.20/kg, Rs.24/kg and Rs.30/kg and sells the mixture at a profit of 20% at Rs.30 / kg. How many kgs of the second variety will be in the mixture if 2 kgs of the third variety is there in the mixture?</p>
        <input type="radio" name="op14" value="0">1 kg<br><br>
        <input type="radio" name="op14" value="0">3 kg<br><br>
        <input type="radio" name="op14" value="1">5 kg<br><br>
        <input type="radio" name="op14" value="0">6 kg<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 15</h3>
        <p>P and Q travels from D to A and break journey at M in between. Somewhere between D and M, P asks "how far have we travelled?" Q replies, "Half as far as the distance from here to M". Somewhere between M and A, exactly 300 km from the point where P asks the first question, "How far have we to go?" Q replies, "Half as far as the distance from M to here". The distance between D and A is:</p>
        <input type="radio" name="op15" value="0">250 km<br><br>
        <input type="radio" name="op15" value="0">300 km<br><br>
        <input type="radio" name="op15" value="1">450 km<br><br>
        <input type="radio" name="op15" value="0">500 km<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 16</h3>
        <p>In an industry, the raw materials and the finished goods are transported on the conveyor belt. There are two conveyor belt, one for carrying parts from P P to point Q Q and another for carrying parts from R R to point Q Q . P P , Q Q and R R in that order are in a straight line. Sometimes, the belt serves to transport cart, which can themselves move with respect to the belts. The two belts move at a speed of 0.5 m/s and the cart move at a uniform speed of 2 m/s with respect to the belts. A cart goes from point P P to R R and back to P P taking a total of 64 s. Find the distance PR PR in meters. Assume that the time taken by the cart to turn back at R R is negligible?</p>
        <input type="radio" name="op16" value="0">48<br><br>
        <input type="radio" name="op16" value="0">54<br><br>
        <input type="radio" name="op16" value="1">60<br><br>
        <input type="radio" name="op16" value="0">64<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 17</h3>
        <p>Mukesh, Suresh and Dinesh travel from Delhi to Mathura to attend Janmashtmi Utsav. They have a bike which can carry only two riders at a time as per traffic rules. Bike can be driven only by Mukesh. Mathura is 300 km from Delhi. All of them walk at 15 km/h. All of them start their journey from Delhi simultaneously and are required to reach Mathura at the same time. If the speed of bike is 60km/h, then what is the shortest possible time in which all three can reach Mathura at the same time?</p>
        <input type="radio" name="op17" value="0">58/7 hrs<br><br>
        <input type="radio" name="op17" value="1">65/7 hrs<br><br>
        <input type="radio" name="op17" value="0">10 10 hrs<br><br>
        <input type="radio" name="op17" value="0">None of these<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 18</h3>
        <p>A man driving his bike at 24 kmph reaches his office 5 minutes late. Had he driven 25 25 faster on an average he would have reached 4 minutes earlier than the scheduled time. How far is his office?</p>
        <input type="radio" name="op18" value="1">1 kg<br><br>
        <input type="radio" name="op18" value="0">3 kg<br><br>
        <input type="radio" name="op18" value="0">5 kg<br><br>
        <input type="radio" name="op18" value="0">6 kg<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 19</h3>
        <p>In what ratio must a person mix three kinds of tea costing Rs.60/kg, Rs.75/kg and Rs.100 /kg so that the resultant mixture when sold at Rs.96/kg yields a profit of 20%?</p>
        <input type="radio" name="op19" value="0">1 : 2 : 4<br><br>
        <input type="radio" name="op19" value="0">3 : 7 : 6<br><br>
        <input type="radio" name="op19" value="1">1 : 4 : 2<br><br>
        <input type="radio" name="op19" value="0">None of these<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 20</h3>
        <p>Three athletes A, B and C run a race, B finished 24 meters ahead of C and 36 m ahead of A , while C finished 16 m ahead of A . If each athlete runs the entire distance at their respective constant speeds, what is the length of the race?</p>
        <input type="radio" name="op20" value="0">108 m<br><br>
        <input type="radio" name="op20" value="0">90 m<br><br>
        <input type="radio" name="op20" value="0">80 m<br><br>
        <input type="radio" name="op20" value="1">96 m<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 21</h3>
        <p>A zookeeper counted the heads of the animals in a zoo and found it to be 80. When he counted the legs of the animals he found it to be 260. If the zoo had either pigeons or horses, how many horses were there in the zoo?</p>
        <input type="radio" name="op21" value="0">30<br><br>
        <input type="radio" name="op21" value="0">40<br><br>
        <input type="radio" name="op21" value="1">50<br><br>
        <input type="radio" name="op21" value="0">60<br><br>
            </div>
            </div>
                        <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 22</h3>
        <p>The XYZ river flows at 12 km/hr. A boy who can row at 2518 m/s in still water had to cross it in the least possible time. The distance covered by the boy is how many times the width of the river XYZ ?</p>
        <input type="radio" name="op22" value="0">2.1<br><br>
        <input type="radio" name="op22" value="0">2.3<br><br>
        <input type="radio" name="op22" value="1">2.6<br><br>
        <input type="radio" name="op22" value="0">2.9<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 23</h3>
        <p>A , B and C start simultaneously from X to Y . A reaches Y, turns back and meet B at a distance of 11 km from Y. B reached Y, turns back and meet C at a distance of 9 km from Y. If the ratio of the speeds of A and C is 3:2 , what is the distance between X and Y ?</p>
        <input type="radio" name="op23" value="1">99 m<br><br>
        <input type="radio" name="op23" value="0">100 m<br><br>
        <input type="radio" name="op23" value="0">120 m<br><br>
        <input type="radio" name="op23" value="0">142 m<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 24</h3>
        <p>A 20 litre mixture of milk and water contains milk and water in the ratio 3 : 2. 10 litres of the mixture is removed and replaced with pure milk and the operation is repeated once more. At the end of the two removals and replacement, what is the ratio of milk and water in the resultant mixture?</p>
        <input type="radio" name="op24" value="0">17 : 3<br><br>
        <input type="radio" name="op24" value="1">9 : 1<br><br>
        <input type="radio" name="op24" value="0">3 : 17<br><br>
        <input type="radio" name="op24" value="0">5 : 3<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 25</h3>
        <p>From a point P , on the surface of radius 3 cm, two cockroaches A and B started moving along two different circular paths, each having the maximum possible radius, on the surface of the sphere, that lie in the two different planes which are inclined at an angle of 45 degree to each other. If A and B takes 18 sec and 6 sec respectively, to complete one revolution along their respective circular paths, then after how much time will they meet again, after they start from P ?</p>
        <input type="radio" name="op25" value="0">27 sec<br><br>
        <input type="radio" name="op25" value="0">24 sec<br><br>
        <input type="radio" name="op25" value="0">18 sec<br><br>
        <input type="radio" name="op25" value="1">9 sec<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 26</h3>
        <p>A man driving his bike at 24 kmph reaches his office 5 minutes late. Had he driven 25 25 faster on an average he would have reached 4 minutes earlier than the scheduled time. How far is his office?</p>
        <input type="radio" name="op26" value="0">1 kg<br><br>
        <input type="radio" name="op26" value="1">3 kg<br><br>
        <input type="radio" name="op26" value="0">5 kg<br><br>
        <input type="radio" name="op26" value="0">6 kg<br><br>
            </div>
            </div>

                                        <div class="col-md-6 col-md-offset-5">
                                <button type="submit" href="quantitestSubmit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
            <!-- /.row -->
            <!-- Three columns of Tests -->
            <!-- /.row -->
        <!--</div>
    </div>
</center>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>