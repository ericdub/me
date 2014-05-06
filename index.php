<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Eric Watkins</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Eric Watkins</h1>
					<h3>Web Designer | eric.r.watkins@gmail.com</h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>I'm web designer &amp; developer with 10 years of professional experience. My passion is designing excellent, frictionless user experiences from top to bottom. </p>
				</div>
				<div class="col-lg-3">
					<p><a href="#"><i class="icon-file"></i></a> <sm>DOWNLOAD PDF</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


	<section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Bachelor of Journalism</t><br/>
						University of Missouri - Columbia<br/>
						
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>May 2000</sm><br/>
					<imp><sm>Magna Cum Laude</sm></imp>
					</p>
				</div>
	
				
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Web Developer</t><br/>
						Daniel Boone Regional Library<br/>
					</p>
					<p><more>Supervised complete overhaul and relaunch of the DBRL Digital Branch</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JANUARY 2013 - TODAY</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Webmaster</t><br/>
						Stephens College<br/>
					</p>
					<p><more>Did things for the college site!</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>OCTOBER 2006 - DECEMBER 2012</sm></p>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>I-Net Administrator</t><br/>
						University of Missouri - Columbia<br/>
					</p>
					<p><more>My boss was horrible.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JANUARY 2002 - SEPTEMBER 2006</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->


	
	
	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					
					<div class="col-lg-3 centered">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<p>Bootstrap</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 60,
										color:"#1abc9c"
									},
									{
										value : 40,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 centered">
						<canvas id="drupal" height="130" width="130"></canvas>
						<p>Drupal</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 60,
										color:"#1abc9c"
									},
									{
										value : 40,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("drupal").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					
					<div class="col-lg-3  centered">
						<canvas id="html" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="javascript" height="130" width="130"></canvas>
						<p>Javascript</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 centered">
						<canvas id="mysql" height="130" width="130"></canvas>
						<p>MySQL</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("mysql").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="photoshop" height="130" width="130"></canvas>
						<p>Photoshop</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 55,
										color:"#1abc9c"
									},
									{
										value : 45,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="php" height="130" width="130"></canvas>
						<p>PHP</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("php").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="sass" height="130" width="130"></canvas>
						<p>SASS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 30,
										color:"#1abc9c"
									},
									{
										value : 70,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("sass").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

					

					<div class="col-lg-3 centered">
						<canvas id="wordpress" height="130" width="130"></canvas>
						<p>Wordpress</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->



	<section id="work" name="work"></section>
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
				<div class="col-lg-6">
					<p><img class="img-responsive" src="assets/img/port01.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
					<p>CANALS OF ENGLAND</p>
				<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
					<sm><i class="icon-tag"></i> design</sm></more> 
				</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="assets/img/port02.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>SANKEY</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
						<sm><i class="icon-tag"></i> front-end</sm></more> 
					</p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="assets/img/port03.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>WE GROW</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
						<sm><i class="icon-tag"></i> web design</sm></more> 
					</p>
				</div>
		
		</div><!--/.row -->
		<br>
		<br>
	</div><!--/.container -->
	


	<section id="contact" name="contact"></section>
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Email</t><br/>
						eric.r.watkins@gmail.com <br/>
					</p>
					<p><t>Address</t><br/>
						Columbia, Missouri <br/>
						
					</p>
					<p><t>Phone</t><br/>
						803.386.7835 <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>KEEP IN TOUCH</sm></p>
					<p>
						<a href="https://github.com/ericdub"><i class="icon-github"></i></a>
						<a href="https://twitter.com/Carlos_TheDwarf"><i class="icon-twitter"></i></a>
						<a href="https://www.facebook.com/ericdub"><i class="icon-facebook"></i></a>
						<a href="https://plus.google.com/u/0/+EricWatkinsWeb/"><i class="icon-google-plus"></i></a>
						

					</p>
				</div>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #footer -->
	
	<div id="c">
		<div class="container">
			<p></p>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
