@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--  Panels  -->
    <form method="POST" action="/technicaltestSubmit">
    {{ csrf_field() }}
     <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title" align="center">Technical Test</h2>
        </div>
                <div class="panel-body"> 
        <h3>Question 1</h3>
        <p>Which of the following hardware components is the most important to the operation of a database management system?</p>
        <input type="radio" name="op1" value="0">high-resolution video display<br><br>
        <input type="radio" name="op1" value="0">printer<br><br>
        <input type="radio" name="op1" value="1">high speed, large-capacity disk<br><br>
        <input type="radio" name="op1" value="0">plotter<br><br>


            </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 2</h3>
        <p>A form defines</p>
        <input type="radio" name="op2" value="0">where data is placed on the screen<br><br>
        <input type="radio" name="op2" value="1">both (a) and (b)<br><br>
        <input type="radio" name="op2" value="0">the width of each field<br><br>
        <input type="radio" name="op2" value="0">All of the above<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 3</h3>
        <p>Which of the following is not a logical data-base structure?</p>
        <input type="radio" name="op3" value="0">tree<br><br>
        <input type="radio" name="op3" value="1">chain<br><br>
        <input type="radio" name="op3" value="0">relational<br><br>
        <input type="radio" name="op3" value="0">network<br><br>
            </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 4</h3>
        <p>A top-to-bottom relationship among the items in a database is established by a</p>
        <input type="radio" name="op4" value="0">Network schema<br><br>
        <input type="radio" name="op4" value="0">Relational schema<br><br>
        <input type="radio" name="op4" value="1">Hierarchical schema<br><br>
        <input type="radio" name="op4" value="0">All of the above<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 5</h3>
        <p>Data item characteristics that are important in data management include</p>
        <input type="radio" name="op5" value="0">punctuation<br><br>
        <input type="radio" name="op5" value="1">width<br><br>
        <input type="radio" name="op5" value="0">language<br><br>
        <input type="radio" name="op5" value="0">spelling<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 6</h3>
        <p>A pointer IS</p>
        <input type="radio" name="op6" value="1">A variable that stores address of other variable<br><br>
        <input type="radio" name="op6" value="0">A keyword used to create variables<br><br>
        <input type="radio" name="op6" value="0">A variable that stores address of an instruction<br><br>
        <input type="radio" name="op6" value="0">All of the above<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 7</h3>
        <p>What function should be used to free the memory allocated by calloc() ?</p>
        <input type="radio" name="op7" value="1">free();<br><br>
        <input type="radio" name="op7" value="0">dealloc();<br><br>
        <input type="radio" name="op7" value="0">malloc(variable_name, 0)<br><br>
        <input type="radio" name="op7" value="0">memalloc(variable_name, 0)<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 8</h3>
        <p>Which of the following function sets first n characters of a string to a given character?</p>
        <input type="radio" name="op8" value="0">strinit()<br><br>
        <input type="radio" name="op8" value="0">strset ()<br><br>
        <input type="radio" name="op8" value="1">strnset()<br><br>
        <input type="radio" name="op8" value="0">strcset()<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 9</h3>
        <p>Which of the following special symbol allowed in a variable name?</p>
        <input type="radio" name="op9" value="0">* (asterisk)<br><br>
        <input type="radio" name="op9" value="0">| (pipeline)<br><br>
        <input type="radio" name="op9" value="0">- (hyphen)<br><br>
        <input type="radio" name="op9" value="1">_ (underscore)<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 10</h3>
        <p>Which of the following range is a valid long double (Turbo C in 16 bit DOS OS) ?</p>
        <input type="radio" name="op10" value="1">3.4E-4932 to 1.1E+4932<br><br>
        <input type="radio" name="op10" value="0">3.4E-4932 to 3.4E+4932<br><br>
        <input type="radio" name="op10" value="0">1.1E-4932 to 1.1E+4932<br><br>
        <input type="radio" name="op10" value="0">1.7E-4932 to 1.7E+4932<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 11</h3>
        <p>What does a switch do when a frame is received on an interface and the destination hardware address is unknown or not in the filter table?</p>
        <input type="radio" name="op11" value="0">Forwards the switch to the first available link<br><br>
        <input type="radio" name="op11" value="0">Drops the frame<br><br>
        <input type="radio" name="op11" value="1">Floods the network with the frame looking for the device<br><br>
        <input type="radio" name="op11" value="0">Sends back a message to the originating station asking for a name resolution
<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 12</h3>
        <p>How many non-overlapping channels are available with 802.11a?</p>
        <input type="radio" name="op12" value="0">3<br><br>
        <input type="radio" name="op12" value="1">12<br><br>
        <input type="radio" name="op12" value="0">23<br><br>
        <input type="radio" name="op12" value="0">40<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 13</h3>
        <p>Which command is used to determine if an IP access list is enabled on a particular interface?</p>
        <input type="radio" name="op13" value="1">show ip interface
<br><br>
        <input type="radio" name="op13" value="0">show access-lists<br><br>
        <input type="radio" name="op13" value="0">show interface<br><br>
        <input type="radio" name="op13" value="0">show interface access-lists<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 14</h3>
        <p>What does a switch do when a frame is received on an interface and the destination hardware address is unknown or not in the filter table?</p>
        <input type="radio" name="op14" value="0">Forwards the switch to the first available link<br><br>
        <input type="radio" name="op14" value="0">  Drops the frame<br><br>
        <input type="radio" name="op14" value="1">Floods the network with the frame looking for the device<br><br>
        <input type="radio" name="op14" value="0">Sends back a message to the originating station asking for a name resolution<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 15</h3>
        <p>In Cisco's Unified Wireless Solution, what is the split-MAC architecture?</p>
        <input type="radio" name="op15" value="0">The split-MAC architecture uses MAC addresses to create a forward/filter table and break up collision domains.<br><br>
        <input type="radio" name="op15" value="0">The split-MAC architecture uses MAC addresses on the wireless network and IP addresses on the wired network.<br><br>
        <input type="radio" name="op15" value="1">The split-MAC architecture allows the splitting of 802.11 protocol packets between the AP and the controller to allow processing by both devices.<br><br>
        <input type="radio" name="op15" value="0">The split-MAC architecture uses MAC addresses to create a forward/filter table and break up broadcast domains.<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 16</h3>
        <p>In which of the following is a single-entity instance of one type of related to a single-entity instance of another type?</p>
        <input type="radio" name="op16" value="0">One-to-Many Relationship<br><br>
        <input type="radio" name="op16" value="0">Many-to-Many Relationship<br><br>
        <input type="radio" name="op16" value="1">One-to-One Relationship<br><br>
        <input type="radio" name="op16" value="0">Composite Relationship<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 17</h3>
        <p>An on-line commercial site such as Amazon.com is an example of a(n) ________ .</p>
        <input type="radio" name="op17" value="0">single-user database application<br><br>
        <input type="radio" name="op17" value="1">e-commerce database application<br><br>
        <input type="radio" name="op17" value="0">multiuser database application<br><br>
        <input type="radio" name="op17" value="0">data mining database application<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 18</h3>
        <p>Which type of entity has its relationship to another entity determined by an attribute in that other entity called a discriminator?</p>
        <input type="radio" name="op18" value="1">Subtype entity<br><br>
        <input type="radio" name="op18" value="0">Supertype entity<br><br>
        <input type="radio" name="op18" value="0">Archetype entity<br><br>
        <input type="radio" name="op18" value="0">Instance entity<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 19</h3>
        <p>The following are functions of a DBMS except ________ .</p>
        <input type="radio" name="op19" value="0">creating databases<br><br>
        <input type="radio" name="op19" value="0">processing data<br><br>
        <input type="radio" name="op19" value="1">creating and processing forms<br><br>
        <input type="radio" name="op19" value="0">administrating databases<br><br>
            </div>
            </div>            <div class="panel panel-primary">
                <div class="panel-body"> 
        <h3>Question 20</h3>
        <p>An attribute that names or identifies entity instances is a(n):</p>
        <input type="radio" name="op20" value="0">relationship.<br><br>
        <input type="radio" name="op20" value="0">attribute.<br><br>
        <input type="radio" name="op20" value="0">entity.<br><br>
        <input type="radio" name="op20" value="1">identifier.<br><br>
            </div>
            </div>

                                        <div class="col-md-6 col-md-offset-5">
                                <button type="submit" href="technicaltestSubmit" class="btn btn-primary">
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
@endsection
