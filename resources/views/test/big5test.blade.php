@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Big 5 Test</div>
                <div class="panel-body">
            <form method="POST" action="/big5submit">
            {{ csrf_field() }}
                <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">1. Am the life of the party.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="E1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E1" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">2. Feel little concern for others.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A1" value="5" />Like</td></div> 
                      </div>

                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">3. Am always prepared.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="C1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C1" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">4. Get stressed out easily.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N1" value="5" />Like</td></div> 
                      </div>
                    <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">5. Have a rich vocabulary.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="O1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O1" value="5" />Like</td></div> 
                    </div>
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">6. Don't talk a lot.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E2" value="5" />Like</td></div> 
                      </div>

                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">7. Am interested in people.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="A2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A2" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">8. Leave my belongings around.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C2" value="5" />Like</td></div> 
                      </div>
                    <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">9. Am relaxed most of the time.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="N2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N2" value="5" />Like</td></div> 
                    </div>
                        <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">10. Have difficulty understanding abstract ideas.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="O2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O2" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">11. Feel comfortable around people.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E3" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">12. Insult people.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A3" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">13. Pay attention to details.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C3" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">14. Worry about things.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N3" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">15. Have a vivid imagination.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="O3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O3" value="5" />Like</td></div> 
                    </div>
                        <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">16. Keep in the background..</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E4" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">17. Sympathize with others' feelings.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A4" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">18. Make a mess of things.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C4" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">19. Seldom feel blue.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N4" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">20. Am not interested in abstract ideas.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="O4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O4" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">21. Start conversations.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="E5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E5" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">22. Am not interested in other people's problems.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A5" value="5" />Like</td></div> 
                      </div>

                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">23. Get chores done right away.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="C5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C5" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">24. Am easily disturbed.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N5" value="5" />Like</td></div> 
                      </div>
                    <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">25. Have excellent ideas.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="O5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O5" value="5" />Like</td></div> 
                    </div>
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">26. Have little to say.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E6" value="5" />Like</td></div> 
                      </div>

                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">27. Have a soft heart.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="A6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A6" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">28. Often forget to put things back in their proper place.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C6" value="5" />Like</td></div> 
                      </div>
                    <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">29. Get upset easily.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="N6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N6" value="5" />Like</td></div> 
                    </div>
                        <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">30. Do not have a good imagination.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="O6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O6" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">31. Talk to a lot of different people at parties.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E7" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">32. Am not really interested in others.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A7" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">33. Like order.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C7" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">34. Change my mood a lot.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N7" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">35. Am quick to understand things.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="O7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O7" value="5" />Like</td></div> 
                    </div>
                        <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">36. Don't like to draw attention to myself.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E8" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">37. Take time out for others.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A8" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">38. Shirk my duties.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C8" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">39. Have frequent mood swings.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N8" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">40. Use difficult words.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="O8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O8" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">41. Don't mind being the center of attention.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E9" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E9" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E9" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E9" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E9" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">42. Feel others' emotions.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A9" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A9" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A9" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A9" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A9" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">43. Follow a schedule.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C9" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C9" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C9" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C9" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C9" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">44. Get irritated easily.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N9" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N9" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N9" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N9" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N9" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk " class="panel-body">
                   <label for="name" class="col-md-7 control-label">45. Spend time reflecting on things.</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="O9" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O9" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O9" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O9" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O9" value="5" />Like</td></div> 
                    </div>
                        <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">46. Am quiet around strangers.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="E10" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E10" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="E10" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E10" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="E10" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">47. Make people feel at ease.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="A10" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A10" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="A10" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A10" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="A10" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">48. Am exacting in my work.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="C10" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C10" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="C10" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C10" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="C10" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:cornsilk" class="panel-body">
                    <label for="name1" class="col-md-7 control-label">49. Often feel blue.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="N10" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N10" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="N10" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N10" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="N10" value="5" />Like</td></div> 
                      </div>
                      <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">50. Am full of ideas.</label>
                                <div class="col-sm-1">
                                <input type="radio" name="O10" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O10" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="O10" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O10" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="O10" value="5" />Like</td></div> 
                      </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="big5submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    @if (count($errors)>0)
                       @foreach ($errors->all() as $error)
                           {{$error}}
                       @endforeach
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection