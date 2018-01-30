@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Leadership Skills</h2>
        </div>
        <div class="panel-body"> 

<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/ld1.jpeg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/ld2.jpeg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/ld3.jpeg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/ld4.jpeg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/ld5.jpeg')}}" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>

</center>		
            <p>
<h2><b>Leadership: A Definition</b></h2>

<h5>According to the idea of transformational leadership, an effective leader is a person who does the following:

<ul><li> Creates an inspiring vision of the future.</li></ul>
<ul><li>Motivates and inspires people to engage with that vision.</li></ul>
<ul><li>Manages delivery of the vision.</li></ul>
<ul><li>Coaches and builds a team, so that it is more effective at achieving the vision.</li></ul>

<ol>Leadership brings together the skills needed to do these things. We'll look at each element in more detail.</ol>

Good leadership is a result of the
careful application of 11 skills that any post leader or officer can learn to use. With practice, these
skills can become a part of the adult’s or youth officer’s leadership style and will prove helpful in
Exploring and all other leadership situations.</h5>

<h3><b>Key Points</b></h3>

<h5>Leadership can be hard to define and it means different things to different people.<br>
<br>

In the transformational leadership model, leaders set direction and help themselves and others to do the right thing to move forward. To do this they create an inspiring vision, and then motivate and inspire others to reach that vision. They also manage delivery of the vision, either directly or indirectly, and build and coach their teams to make them ever stronger.
<br>
<br>
Effective leadership is about all of this – and it's exciting to be part of this journey!</h5>
</p>
<p align="center"><a class="btn btn-default" href="{{url('/select')}}" role="button">Take The Test</a>
</p>  
            </div>
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
@endsection
