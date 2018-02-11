<!DOCTYPE html>

<!-- My personal Page (Main Page)
	July 7,2017
	Designed by Carlos Sanchez-->

<html>
	<title>My Website</title>
	<body class="mypersonalwebsite">
		<head>
			<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="me.css">
			<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	
		</head>
		<!--Contact information-->
		<div id="wholepage">
				<div class="jumbotron ">
				<div class="container">
					<div class="header ">
						<h1 class="display-1">CARLOS SANCHEZ</h1>
					</div>

					<ul class="informationlist">
						<li><i class="fa fa-laptop fa-fw"></i>Computer Scientist</li>
						<li><i class="fa fa-map-marker fa-fw"></i>80 ELM ST,NEWARK N.J., 07105</li>
						<li><i class="fa fa-envelope-o fa-fw"></i>admroser@gmail.com</li>
						<li><i class="fa fa-phone fa-fw"></i>(732) 688-8979</li>
						<li><i class="fa fa-linkedin fa-fw"></i> <a href="https://www.linkedin.com/in/carlos-sanchez-330031a1/"> &nbsp;My Linkedin</a></li>
					</ul>
				</div>
			</div>
			<!--button to the top-->
			<button onclick="topFunction()" id="myBtn" title="Go to top">
				<span class="fa-stack fa-lg"><i class="fa fa-arrow-circle-up  fa-stack-2x"></i></span>
			</button>
		

			<!--Summary-->
			<div  class="summary">
				<div class="container-fluid">
					<div class="row">
						<div style="padding:0"class="col-md-7">
							<img class="img-responsive" src="me.jpg" style="width:100%">
						</div>
						<div style="padding:30px"class="col-md-5 ">
							<div class="header">
								<h2>ABOUT ME</h2>
							</div>
							<div class="panel panel-primary">
								<div class="panel-body">
									<p>
									I recently graduated from Kean University with a major in Computer Science 
									Major and a minor in Math. As an undergraduate Kean University student, I 
									took advanced computer courses related to networking and computer security. 
									Also, I am familiarized with several programming languages. I have developed 
									several individual projects and played a major role in multiple team projects. 
									These projects were websites related to hotel reservation, event planning, book 
									sales and a networking hardware vendor. During the development of these projects, 
									I learned a lot about web and database security. Recently, I have developed and 
									design a mobile android application using Google Maps API.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style='background-color:#0C182D;color:white'class=" jumbotron resumetitle">
				<div class="container">
					<h1 style='text-align:center'>RESUME</h1>
				</div>
			</div>
			<div class="myresume">
				<div class="skills">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="container"> 
								<div class="header">
									<h2> <i class="fa fa-asterisk"></i>SKILLS</h2>
								</div>
								<div class="row">
									<div style='padding:20px'class="col-sm-4 backgrouncolor_skills ">
										<h3>Technical:</h3>
										<ul>
											<li>
											<div class="container">
												<p>HTML & CSS</p>
												<div class="skill html">90%</div>
											</div><!--Endofcontainer--></li>
											
											<li>
											<div class="container">
												<p>PHP</p>
												<div class="skill php">85%</div>
											</div></li>
											
											<li>
											<div class="container">
												<p>SQL</p>
												<div class="skill sql">70%</div>
											</div></li>
											
											<li>
											<div class="container">
												<p>JavaScript</p>
												<div class="skill js">40%</div>
											</div></li>
											
											<li>
											<div class="container">
												<p>Java</p>
												<div class="skill java">50%</div>
											</div></li>
											
											<li>
											<div class="container">
												<p>C++</p>
												<div class="skill c">50%</div>
											</div></li>
											
											<li> Pc troubleshooting</li>
										</ul>
										
										<h4>Operating Systems: <i class="fa fa-linux"></i>  <i style= "color:#006899"class="fa fa-windows"></i></h4>
									</div>
									
									<div style=' padding:20px' class="col-sm-4 backgrouncolor_skills_hard">
										<h3>Hard:</h3>
										<ul>
											<li>Spanish fluency</li>
											<li>Word processing</li>
											<li>computer programming</li>
										</ul>
									</div>
									<div style='padding:20px'class="col-sm-4 backgrouncolor_skills_soft">
										<h3>Soft:</h3>
										<ul>
											<li>Committed to learn as <br>lifelong process</li>
											<li>Ability to plan</li>
											<li>Organize and prioritize work</li>
										</ul>
									</div>
								</div><!---EndOfRow--->
							</div><!---EndofContainerFluid---->
						
						
						
						</div><!---EndofPanelbody-->
					</div><!---EndOfPanel--->
				</div><!---EndOfSkills-->
			<br></br>
			<div class="Education">
				<div class="container">
					<div class="header">
						<h2><i class="fa fa-mortar-board fa-fw"></i>EDUCATION</h2>
					</div>
					<ul>
						<li><p>B.S IN COMPUTER SCIENCE • 2017 • KEAN UNIVERSITY <span style="font-weight:bold;font-style: italic;">GPA:3.53</bold></span></p></li>
						<li><p>A.A.S IN COMPUTER SCIENCE • 2013 • UNION COUNTY COLLEGE <span style="font-weight:bold;font-style: italic;">GPA:3.93</span></span></p></li>	
					</ul>
				</div>
			</div><!---EndOfEducation-->
			<br></br>
				<div class="Experience">
				<div class="container">
					<div class="header">
						<h2><i class="fa fa-mortar-board fa-fw"></i>WORK EXPERIENCE</h2>
					</div>
					<div class="row">
						<div class="col-md-8">
							<h4>Eagle Electric Electrical Contractor - Clark, N.J. </h4>
						</div>
						<div class="col-md-4">
							<h4>January 2016 - Present</h4>
						</div><!---EndofColumn--->		
					</div><!--Endofrow--->
	
					
					<ul>
						<p>Computer Support Specialist</p>
						<li><p>Identified and resolved hardware and software issues.</p></li>
						<li><p>Analyzed hardware and software to determine when it was more cost-effective to upgrade.</p></li>
						<li>Performed on-site and remote analysis of computer and network issues.
						</li>
						<p>Front-End Web Developer</p>
						<li><p>Designing company website to develop web presence.</p></li>
						<li><p>Working directly with client to ensure that all objectives are accomplished.</p></li>
						<li><p>Contributing to design and development of client and server database application.</p>
						</li>
						<li><p>Applying principles of UX design
						</p></li>
						
						
					</ul>
					<!--Experience 2-->
						<div class="row">
						<div class="col-md-8">
						<h4>Amazon - Elizabeth, N.J. </h4>
						</div>
						<div class="col-md-4">
						<h4>November 22-December 25</h4>
							</div>
					</div><!--Endofrow--->
						<ul>
						<p>Amazon Seasonal Sortation Associate	</p>
						</ul>
			
			</div><!---EndOfEducation-->
			<br></br>
			<div class="awards">
				<div class="container">
					<div class="header">
						<h2><i class="fa fa-certificate fa-fw"></i>RECOGNITION</h2>
					</div>
					
					<ul>
						<li>Phi Theta Kappa member (official honor society of two-year colleges)</li> 
						<li>President High Honor List at Union County College</li>  
						<li>Kean University Scholarship “Class of 1962 Annual Scholarship” 2014</li> 
						<li>Kean University Dean’s list member (Five Semesters)</li> 
						<li>Kean University’s Lambda Alpha Sigma Academic Honors list member 2016</li> 
						<li>Cum Laude</li> 
					</ul>
				</div>
			</div><!---Awards--->
			
	
		</div><!----EndOFResume-->
			<br></br>
		<!--Personal Profile-->
			<div style='padding:5em 0 5em 0' class="personalprofile backgrouncolor_personalprofile">
				<div class=" container">
					<div class="header">
					<h2 onload="typeWriter()"></h2>
						<h2 id="demo" ></h2>

					</div>
					<br></br>
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<img class="img-responsive" src="coding.png	" style="width:100%">
							</div>
							<br></br>
							<div class="col-md-4">
								<h2>My personal interests include:</h2>
							<ul>
							<li>Learning about new things related to tech.</li>
							<li>Watch Udemy and Lynda courses</li>
						</ul>

							<h2>Conferences and Tech events attended:</h2>
							<table class="table table-sm table-dark">
	  <thead>
	    <tr>
				<th scope="col">#</th>
	      <th scope="col">Date</th>
	      <th scope="col">Event</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th><!--Dates-->
 				<td>Amazon Alexa Dev</td>
			  <td>10/24/17</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th><!--Events-->
				 <td>Amazon Alexa Dev</td>
	       <td>10/24/17</td>
	    </tr>
	  </tbody>
	</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div><!--EndofWholePage-->
			<footer class="contactme text-center background_footer">
				<div class="container">				
					<i class="fa fa-copyright"><?php echo date('Y');?></i> 
				</div>
			</footer>
	</body>
	<script>
	window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}	
	</script>
</html>
