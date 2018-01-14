@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->

     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Communication Skills</h2>
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
<p>

<h3>Think of how often you communicate with people during your day.</h3></p>

<p><h5>
You write emails, facilitate meetings, participate in conference calls, create reports, devise presentations, debate with your colleagues… the list goes on.</p>
<p>
We can spend almost our entire day communicating. So, how can we provide a huge boost to our productivity? We can make sure that we communicate in the clearest, most effective way possible.</p>
<p>
This is why the 7 Cs of Communication are helpful. The 7 Cs provide a checklist for making sure that your meetings [Add to My Personal Learning Plan] , emails [Add to My Personal Learning Plan] , conference calls [Add to My Personal Learning Plan] , reports [Add to My Personal Learning Plan] , and presentations [Add to My Personal Learning Plan] are well constructed and clear – so your audience gets your message.</p>
<p>
Every day has something with it which is stressful and if not managed with positive attitude adds up and makes our life depressing and frustrating. A man once tangled in these frustrations goes into never returning stage loosing deadlines for work, ill behaving, drug /smoke or alcohol addictions. Emotional breakdown, bad eating habits, headache, tiredness, anxiety, sleepy head, inactivity, heart attacks and blood pressure problems all can be related directly or indirectly to improper stress management.
</h5></p>




<h3>According to the 7 Cs, communication needs to be:</h3>
<p><h5>
Stress makes people to grow expand and lead their life the way they ever imagined but too much of stress is dangerous, it can make us loose the track or worse. In Gym exercising is helpful we do cardio or lift weights within our limit, but what if we strangle with the weights beyond our capacity? Or run on machine with speed way beyond our limit? Accidents are prone to happen. Similarly life stresses should also be in limit when exceeds may produce harmful results. 
Following are some of the strategies we must follow to grow in stressful world and enhance or endurance:
</h5></p>
<p class =ex><h5>
<ul><br>1.	<b>Clear:</b> When writing or speaking to someone, be clear about your goal or message. What is your purpose in communicating with this person? If you're not sure, then your audience won't be sure either.<br>To be clear, try to minimize the number of ideas in each sentence. Make sure that it's easy for your reader to understand your meaning. People shouldn't have to "read between the lines" and make assumptions on their own to understand what you're trying to say..</ul>
<ul><br>2.	<b>Concise:</b> When you are concise in your communication, you stick to the point and keep it brief. Your audience doesn't want to read six sentences when you could communicate your message in three.<br> <ul><li>Are there any adjectives or "filler words" that you can delete? You can often eliminate words like "for instance," "you see," "definitely," "kind of," "literally," "basically," or "I mean."</li></ul><br><ul><li>Are there any unnecessary sentences?</li></ul><br><ul><li>Have you repeated the point several times, in different ways?</li></ul>.</ul> 
<ul><br>3.	<b>Concrete:</b> When your message is concrete, then your audience has a clear picture of what you're telling them. There are details (but not too many!) and vivid facts, and there's laser-like focus. Your message is solid..</ul>
<ul><br>4.	<b>Correct:</b> When your communication is correct, it fits your audience. And correct communication is also error-free communication.<br> <ul><li>Do the technical terms you use fit your audience's level of education or knowledge?</li></ul><br><ul><li>Are all names and titles spelled correctly?</li></ul><br><ul><li>Have you checked your writing [Add to My Personal Learning Plan] for grammatical errors? Remember, spell checkers won't catch everything.</li></ul></ul>
<ul><br>5.	<b>Coherent:</b>When your communication is coherent, it's logical. All points are connected and relevant to the main topic, and the tone and flow of the text is consistent. </ul>
<ul><br>6.	<b>Complete:</b>In a complete message, the audience has everything they need to be informed and, if applicable, take action.<br><ul><li>Does your message include a "call to action," so that your audience clearly knows what you want them to do?</li></ul><br><ul><li>Have you included all relevant information – contact names, dates, times, locations, and so on?</li></ul>. </ul>
<ul><br>7.	<b>Courteous:</b> Courteous communication is friendly, open, and honest. There are no hidden insults or passive-aggressive tones. You keep your reader's viewpoint in mind, and you're empathetic to their needs. </ul>

</h5></p>
<p>
<h3>Key Points<h3>
<h5>
All of us communicate every day. The better we communicate, the more credibility we'll have with our clients, our boss, and our colleagues.<br>
Use the 7 Cs of Communication as a checklist for all of your communication. By doing this, you'll stay clear, concise, concrete, correct, coherent, complete, and courteous.<br>  
</h5></p>
            
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
