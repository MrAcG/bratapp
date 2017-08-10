@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Holland Test</div>
                <div class="panel-body">
            <form method="POST" action="/hollandsubmit">
            {{ csrf_field() }}
                <div style="background-color:lightblue " class="panel-body">
                   <label for="name" class="col-md-7 control-label">1. Planting and growing crops</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R1" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name1" class="col-md-7 control-label">2. Solving math problems</label>
                                <div class="col-sm-1">
                                <input type="radio" name="I1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I1" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name3" class="col-md-7 control-label">3. Being in a play</label>
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
                        
                        <div class="panel-body">
                        <label for="name4" class="col-md-7 control-label">4. Studying other cultures </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S1" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S1" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S1" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S1" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S1" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name5" class="col-md-7 control-label">5. Talking to people at a party </label>
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
                      </div><div class="panel-body">
                        <label for="name6" class="col-md-7 control-label">6. Working with computers  </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name7" class="col-md-7 control-label">7. Working on cars or lawnmowers </label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R2" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name8" class="col-md-7 control-label">8. Astronomy</label>
                                <div class="col-sm-1">
                                <input type="radio" name="I2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I2" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name9" class="col-md-7 control-label">9. Drawing or painting</label>
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
                        <label for="name10" class="col-md-7 control-label">10. Going to church  </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S2" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S2" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S2" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S2" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S2" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name11" class="col-md-7 control-label">11. Working on a sales campaign</label>
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
                      </div><div class="panel-body">
                        <label for="name12" class="col-md-7 control-label">12. Using a cash register   </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name13" class="col-md-7 control-label">13. Carpentry </label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R3" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name14" class="col-md-7 control-label">14. Physics </label>
                                <div class="col-sm-1">
                                <input type="radio" name="I3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I3" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name15" class="col-md-7 control-label">15. Foreign language </label>
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
                        
                        <div class="panel-body">
                        <label for="name16" class="col-md-7 control-label">16. Working with youth   </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S3" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S3" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S3" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S3" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S3" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name17" class="col-md-7 control-label">17. Buying clothes for a store </label>
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
                      </div><div class="panel-body">
                        <label for="name18" class="col-md-7 control-label">18. Working from nine to five  </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name19" class="col-md-7 control-label">19. Setting type for a printing job </label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R4" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name20" class="col-md-7 control-label">20. Using a chemistry set </label>
                                <div class="col-sm-1">
                                <input type="radio" name="I4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I4" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name21" class="col-md-7 control-label">21. Reading fiction or plays  </label>
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
                        <label for="name22" class="col-md-7 control-label">22. Helping people with problems</label>
                                <div class="col-sm-1">
                                <input type="radio" name="S4" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S4" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S4" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S4" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S4" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name23" class="col-md-7 control-label">23. Selling life insurance  </label>
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
                      </div><div class="panel-body">
                        <label for="name24" class="col-md-7 control-label">24. Typing reports </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name25" class="col-md-7 control-label">25. Driving a truck </label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R5" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name26" class="col-md-7 control-label">26. Working in a lab </label>
                                <div class="col-sm-1">
                                <input type="radio" name="I5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I5" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name27" class="col-md-7 control-label">27. Playing a musical instrument  </label>
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
                        
                        <div class="panel-body">
                        <label for="name28" class="col-md-7 control-label">28. Making new friends </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S5" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S5" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S5" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S5" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S5" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name29" class="col-md-7 control-label">29. Leading a group </label>
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
                      </div><div class="panel-body">
                        <label for="name30" class="col-md-7 control-label">30. Following a budget </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name31" class="col-md-7 control-label">31. Fixing electrical appliances</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R6" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name32" class="col-md-7 control-label">32. Building rocket models</label>
                                <div class="col-sm-1">
                                <input type="radio" name="I6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I6" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name33" class="col-md-7 control-label">33. Writing stories or poetry </label>
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
                        <label for="name34" class="col-md-7 control-label">34. Attending sports events </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S6" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S6" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S6" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S6" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S6" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name35" class="col-md-7 control-label">35. Making your opinions heard </label>
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
                      </div><div class="panel-body">
                        <label for="name36" class="col-md-7 control-label">36. Using business machines </label>
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
                      <div style="background-color:lightblue " class="panel-body">
                   <label for="name37" class="col-md-7 control-label">37. Building things</label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R7" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name38" class="col-md-7 control-label">38. Doing puzzles </label>
                                <div class="col-sm-1">
                                <input type="radio" name="I7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I7" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name39" class="col-md-7 control-label">39. Fashion design </label>
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
                        
                        <div class="panel-body">
                        <label for="name40" class="col-md-7 control-label">40. Belonging to a club  </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S7" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S7" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S7" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S7" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S7" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name41" class="col-md-7 control-label">41. Giving talks or speeches  </label>
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
                      </div><div class="panel-body">
                        <label for="name42" class="col-md-7 control-label">42. Keeping detailed records</label>
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
                       <div style="background-color:lightblue " class="panel-body">
                   <label for="name43" class="col-md-7 control-label">43. Wildlife biology </label>
            
                                <div class="col-sm-1">
                                <input type="radio" name="R8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="R8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="R8" value="5" />Like</td></div> 
                    </div>                    
                
                    <div class="panel-body">
                    <label for="name44" class="col-md-7 control-label">44. Using science to get answers </label>
                                <div class="col-sm-1">
                                <input type="radio" name="I8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="I8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="I8" value="5" />Like</td></div> 
                      </div>
                    
                        <div style="background-color:lightblue " class="panel-body">
                        <label for="name45" class="col-md-7 control-label">45. Going to concerts or the theater </label>
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
                        <label for="name46" class="col-md-7 control-label">46. Working with the elderly  </label>
                                <div class="col-sm-1">
                                <input type="radio" name="S8" value="1" />Dislike</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S8" value="2" /></td></div> 
                                <div class="col-sm-1">
                                <input type="radio" name="S8" value="3" />Neutral</td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S8" value="4" /></td></div>
                                <div class="col-sm-1">
                                <input type="radio" name="S8" value="5" />Like</td></div> 
                      </div>
                      <div style="background-color:lightblue " class="panel-body">
                        <label for="name47" class="col-md-7 control-label">47. Sales people</label>
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
                      </div><div class="panel-body">
                        <label for="name48" class="col-md-7 control-label">48. Filing letters and reports </label>
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" href="hollandsubmit" class="btn btn-primary">
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