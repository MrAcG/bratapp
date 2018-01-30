@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Change Management</h2>
        </div>
        <div class="panel-body"> 

<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/tm1.jpg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/tm2.jpeg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/tm3.jpg')}}" style="width:100%">
  <img class="mySlides w3-animate-fading" src="{{URL::asset('/images/tm4.jpg')}}" style="width:100%">
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

<p><h5>
Change management is a term that is bandied about freely. Sometimes it's a scapegoat for less than stellar results: "That initiative failed because we didn't focus enough on change management." And it's often used as a catch-all for project activities that might otherwise get overlooked: "When we implement that new process, let's not forget about the change management."
</p>

<h3>But what exactly is it?</h3></p>
<p>
Change management is a structured approach for ensuring that changes are thoroughly and smoothly implemented, and that the lasting benefits of change are achieved.
<p>
The focus is on the wider impacts of change, particularly on people and how they, as individuals and teams, move from the current situation to the new one. The change in question could range from a simple process change, to major changes in policy or strategy needed if the organization is to achieve its potential.
<p>
<b>Understanding Change Management</b>
<br>
Theories about how organizations change draw on many disciplines, from psychology and behavioral science, through to engineering and systems thinking. The underlying principle is that change does not happen in isolation – it impacts the whole organization (system) around it, and all the people touched by it.
</h5></p>




<h3>According to the 7 Cs, communication needs to be:</h3>
<p><h5>
When you are tasked with "managing change" (irrespective of whether or not you subscribe to a particular change management approach), the first question to consider is what change management actually means in your situation. Change management focuses on people, and is about ensuring change is thoroughly, smoothly and lastingly implemented. And to know what that means exactly in your situation, you must dig down further to define your specific change management objectives.
</h5></p>
<p class =ex><h5>
<ul><br>1.	<b>Sponsorship:</b>Ensuring there is active sponsorship for the change at a senior executive level within the organization, and engaging this sponsorship to achieve the desired results.</ul>
<ul><br>2.	<b>Buy-in:</b> Gaining buy-in for the changes from those involved and affected, directly or indirectly.</ul> 
<ul><br>3.	<b>Involvement:</b> Involving the right people in the design and implementation of changes, to make sure the right changes are made.</ul>
<ul><br>4.	<b>Impact:</b> Assessing and addressing how the changes will affect people.</ul>
<ul><br>5.	<b>Communication:</b> Telling everyone who's affected about the changes. </ul>
<ul><br>6.	<b> Readiness:</b>Getting people ready to adapt to the changes, by ensuring they have the right information, training and help.</ul>

</h5></p>
<p>
<h3>Change Management Activities<h3>
<h5>
Once you have considered the change management objectives and scope, you'll also need to consider the specific tasks. Again, the range of possible activities is broad. It's a question of working out what will best help you meet the change challenge in hand, as you have defined it in your objectives and scope, and how to work along side other people's and projects' activities and responsibilities.
<br>
The essence of this is to identify the tasks that are necessary if you're going to give change the greatest chance of success.
<br>
Coming from this, the activities involved in managing change can include:

<ul>
<br><h5>
    <ul><li>Ensuring there is clear expression of the reasons for change, and helping the sponsor communicate this.</li></ul>
    <ul><li>Identifying "change agents" and other people who need to be involved in specific change activities, such as design, testing, and problem solving, and who can then act as ambassadors for change.</li></ul>
    <ul><li>Assessing all the stakeholders and defining the nature of sponsorship, involvement and communication that will be required.</li></ul>
    <ul><li>Planning the involvement and project activities of the change sponsor(s).</li></ul>
	<ul><li>Planning how and when the changes will be communicated, and organizing and/or delivering the communications messages.</li></ul>
   	<ul><li>Planning activities needed to address the impacts of the change.</li></ul>
    <ul><li>Ensuring that people involved and affected by the change understand the process change.</li></ul>
	<ul><li>Making sure those involved or affected have help and support during times of uncertainty and upheaval.</li></ul>
	<ul><li>Assessing training needs driven by the change, and planning when and how this will be implemented.</li></ul>
	<ul><li>Identifying and agreeing the success indicators for change, and ensure they are regularly measured and reported on.</li></ul>
	<ul>Remember, these are just some typical change management activities. Others may be required in your specific situation. Equally, some of the above may not be within your remit, so plan carefully, and coordinate with other people involved.</ul>
  </h5>
  </ul>

</h5></p>
<p>
<h3>Key Points<h3>
<h5>
Change management is a broad discipline that involves ensuring change is implemented smoothly and with lasting benefits, by considering its wider impact on the organization and people within it. Each change initiative you manage or encounter will have its own unique set of objectives and activities, all of which must be coordinated.
<br>
As a change manager, your role is to ease the journey towards new ways of working, and you'll need a set of tools to help you along the way: There's a wide range of change management tools here at Mind Tools – this a great place to start!
</h5></p>

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
