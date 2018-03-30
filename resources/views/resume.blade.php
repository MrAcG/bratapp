<html>

<head>
	<title>Resume generator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/scroll.css"> -->
	<link rel="stylesheet" type="text/css" href="css/column_scroll.css">
	<link rel="stylesheet" type="text/css" href="css/thin_scroll.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
	<meta name="description" content="Online document editor like interface to create and save Resume">
	<meta name="keywords" content="resume,cv,maker,creator,generator,iit,guwahati,iitg">
</head>

<body>

<div class="container-fluid">

	<div class="row">


		<div class="col-sm-3 no-print" id="left">

			<div id="panel">

				

				<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#usageModal">VIEW INSTRUCTIONS</button>
				<button class="btn btn-block btn-success" onclick="window.print()">PRINT AS PDF</button>

				<hr>

				<h3 class="text-center">Template settings</h3>
				<button id="customTemplateBtn" class="btn btn-block btn-default" onclick="template('custom');">Use custom template</button>
				<h5>
					Contact lines
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="contact" id="contact3">2</div>
						<div class="toggle-option" data-toggle="contact" id="contact4">3</div>
						<div class="toggle-option" data-toggle="contact" id="contact5">4</div>
					</div>
				</h5>
				<h5>
					Horizontal margin
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="margin" id="margin1">1</div>
						<div class="toggle-option" data-toggle="margin" id="margin2">2</div>
						<div class="toggle-option" data-toggle="margin" id="margin3">3</div>
						<div class="toggle-option selected" data-toggle="margin" id="margin4">4</div>
						<div class="toggle-option" data-toggle="margin" id="margin5">5</div>
						<div class="toggle-option" data-toggle="margin" id="margin6">6</div>
					</div>
				</h5>
				<h5>
					Line spacing
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="line" id="line1">1</div>
						<div class="toggle-option" data-toggle="line" id="line2">2</div>
						<div class="toggle-option" data-toggle="line" id="line3">3</div>
						<div class="toggle-option selected" data-toggle="line" id="line4">4</div>
						<div class="toggle-option" data-toggle="line" id="line5">5</div>
						<div class="toggle-option" data-toggle="line" id="line6">6</div>
					</div>
				</h5>
				<h5>
					Center column no.
					<div class="toggle-button">
						<div class="toggle-option multi-select" data-toggle="column" id="column1">1</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column2">2</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column3">3</div>
						<div class="toggle-option multi-select" data-toggle="column" id="column4">4</div>
					</div>
				</h5>
				
				<br>
				
				<div id="customTemplateOptions">
					<h5>
						Font type
						<div class="toggle-button">
							<div class="toggle-option" data-toggle="font" id="fontVerdanaSans">1</div>
							<div class="toggle-option" data-toggle="font" id="fontVerdanaSerif">2</div>
							<div class="toggle-option" data-toggle="font" id="fontRoboto">3</div>
							<div class="toggle-option selected" data-toggle="font" id="fontDroid">4</div>
						</div>
					</h5>
					<h5>
						Title case
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="case" id="caseNormal">Default</div>
							<div class="toggle-option" data-toggle="case" id="caseUpper">Uppercase</div>
						</div>
					</h5>
					<h5>
						Title style
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="title" id="titleRuled">Ruled</div>
							<div class="toggle-option" data-toggle="title" id="titleShaded">Shaded</div>
						</div>
					</h5>
					<h5>
						Title rule position
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="rule" id="ruleAbove">Above title</div>
							<div class="toggle-option" data-toggle="rule" id="ruleBelow">Below title</div>
						</div>
					</h5>
					<br>
					<h5>
						Course
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="course" id="course1">1 line</div>
							<div class="toggle-option" data-toggle="course" id="course2">2 lines</div>
						</div>
					</h5>
					<h5>
						Table border
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="table" id="tableShow">Show</div>
							<div class="toggle-option" data-toggle="table" id="tableHide">Hide</div>
						</div>
					</h5>
					<h5>
						Education year column
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="edyear" id="edyearFirst">First</div>
							<div class="toggle-option" data-toggle="edyear" id="edyearLat">Last</div>
						</div>
					</h5>
					<h5>
						Experience layout
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="experience" id="experience1">L1</div>
							<div class="toggle-option" data-toggle="experience" id="experience2">L2</div>
						</div>
					</h5>
					<h5>
						Projects layout
						<div class="toggle-button">
							<div class="toggle-option selected" data-toggle="projects" id="projects1">L1</div>
							<div class="toggle-option" data-toggle="projects" id="projects2">L2</div>
						</div>
					</h5>
					<br>
				</div>

				<h5>
					<button class="btn btn-sm btn-block btn-primary" data-toggle="modal" data-target="#sectionToggleModal">Show/Hide sections</button>
				</h5>

				<hr>

				<h3 class="text-center">Lists and points</h3>
				<button class="btn btn-block btn-xs btn-success" onclick="insertList();">+ Insert sub-list</button>
				<button class="btn btn-block btn-xs btn-warning" onclick="decreaseIndent();">&lt;&lt; Decrese indentation</button>
				<button class="btn btn-block btn-xs btn-warning" onclick="increaseIndent();">&gt;&gt; Increase indentation</button>
				<h5>
					List style :
					<div class="toggle-button">
						<button class="btn btn-xs custom-button" onclick="changeListStyle('disc');">&#9899;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('circle');">&#9898;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('square');">&#9632;</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('dash');">-</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('decimal');">1.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('upper-roman');">I.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('lower-roman');">i.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('upper-alpha');">A.</button>
						<button class="btn btn-xs custom-button" onclick="changeListStyle('lower-alpha');">a.</button>
					</div>
				</h5>

			</div>

		</div>


		<div class="col-sm-9 text-center" id="right">

			<div id="page" class="droid">

				<div class="row" style="margin-bottom:10px;">
				<div class="col-sm-12">
					
					<div id="info" style="display:inline-block;">
						<h2 id="contentName">{{$name}}</h2>
						<h5 id="contentCourse">B.Tech - XXX Engineering</h5>
						<h5 id="contentBranch">XXX Engineering</h5>
						<h5 id="contentCollege">College Name</h5>
					</div>
					<div id="contact" style="float:right; display:inline-block;">
						Phone Number<br>
						{{$email}}<br>
						<span class="light" id="contactLink1">Linkedin Url<br></span>
						<span class="light" id="contactLink2">GitHub Url<br></span>
					</div>
				</div>
				</div>

			
				<div class="section" id="sectionEducation">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Education</strong></h4>
						<hr class="hr-below">
					</div>
					<ul class="nobullet">
					<li>
						<table class="table customBordered" id="educationTable">
							<tr>
								<td class="header"><strong>Year</strong></td>
								<td class="header"><strong>Degree / Certificate</strong></td>
								<td class="header"><strong>Institute / Board</strong></td>
								<td class="header"><strong>CGPA/Percentage</strong></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</li>
					</ul>
				</div>

				<div class="section" id="sectionObjective">
				    <div class="section-title ruled rule-above">
				         <hr class="hr-above">
				         <h4><strong>Objective</strong></h4>
						<hr class="hr-below">
						<ul>
							

						</ul>
				</div>


				<div class="section" id="sectionExperience">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Experience</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>	
						<div class="title">Title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>	
						<div class="title">Title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionProjects">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Projects</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>		
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Project Mentor</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>		
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>		
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>		
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					<li>
						<div>		
						<div class="title">Project title</div>
						<div class="time right">Year</div>
						</div>
						<div>
						<div class="mentor tab">Mentor name</div>
						</div>
						<div>
						<div class="text">Details.</div>
						</div>
					</li>
					</ul>
				</div>

			
				<div class="section" id="sectionSkills">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Technical skills</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<strong><span class="skillCategory">Programming languages</span> :</strong>
						
					</li>
					<li>
						<strong><span class="skillCategory">Web technologies</span> :</strong>
						
					</li>
					<li>
						<strong><span class="skillCategory">Database management</span> :</strong>
						
					</li>
					<li>
						<strong><span class="skillCategory">Miscellaneous</span> :</strong>
						
					</li>
					<li>
						<strong><span class="skillCategory">Operating system</span> :</strong>
						
					</li>
					</ul>
				</div>


				<div class="section" id="sectionStrength">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Strengths</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
						
					</ul>
				</div>


				<div class="section" id="sectionAchievements">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Achievements</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					
					</ul>
				</div>
			
				<div class="section" id="sectionCurricular">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Extracurriculars</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>

					</ul>
				</div>

				<div class="section" id="sectionDetails">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Personal Details</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>

					</ul>
				</div>

			</div>
			
		</div>


	</div>

</div>


<div class="modal fade" id="usageModal" tabindex='-1'>
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5><strong>Note : </strong>Use <strong>Google Chrome</strong>. Other browsers are unable to print properly and don't support some features.</h5>
				<h4><strong>Editing content</strong></h4>
				<ul>
					<li>Edit the Resume content just like a normal document editor (cut,copy,undo etc).</li>
					<li>Entire sections can be added, reordered, removed just by cut,copy,pasting method. (Use "show/hide sections" button to hide but retain content)</li>
					<li>To remove a section/point/mentor/link etc, just delete it.</li>
					<li>For styled/formatted text, select the text portion and press <kbd>Ctrl+b</kbd> for bold, <kbd>Ctrl+i</kbd> for italics, <kbd>Ctrl+u</kbd> for underlined text.</li>
					<li>Use "Insert sub-list" button to insert sub-points in a point. (like as in achivements section)</li>
					<li>Change indentation and bullet style of the list where your cursor is placed.</li>
				</ul>
				<h4><strong>Editing template</strong></h4>
				<ul>
					<li>Use the options in the left panel to modify the template/look.</li>
				</ul>
				<h4><strong>Saving</strong></h4>
				<ul>
					<li>Close any popup box (like this instructions popup	) if opened. Press <kbd>Ctrl+s</kbd></li>
					<li>This will save the webpage (a .html file and a folder will be saved. Keep them together)</li>
					<li>Open the .html file in browser from your PC.</li>
					<li>This way, you can maintain multiple saved copies for each profile/template on your PC.</li>
				</ul>
				<h4><strong>Print as PDF</strong></h4>
				<ul>
					<li>Adjust margin in the Chrome's print dialog box. You may need it if a section is getting split between two pages. Print each page separately with different margins if needed.</li>
					<li>If URLs or some stray text is being shown in print preview, disable the options "Include headers and footers","Include background graphics" etc in the print dialog box.</li>
				</ul>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="sectionToggleModal" tabindex='-1'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionEducation">Education</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionObjective">Objective</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionExperience">Experience</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionProjects">Projects</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionSkills">Technical Skills</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionStrength">Strengths</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionAchievements">Achievements</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionCurricular">Extra curriculars</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionDetails">Personal Details</label></div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>