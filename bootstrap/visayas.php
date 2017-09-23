<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap!</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />	
	<link rel="stylesheet" href="mycss.css"/>
  <link rel="stylesheet" href="homepage.css"/>
	<link href="css/bootstrap.css" rel="stylesheet" />
<style>
select {
font-size: 20px;
width: 40%;
padding: 16px 20px;
background-color: #C92E2E;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
}
#choose { }
</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
					  <img src = "img/LOGO.png" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
						<div  class="collapse navbar-collapse" id="myNavbar" >
						
						  <ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">About</a></li>
							
						  </ul>
						  <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"/> 
									<input type="submit" value="Find" />
								</form> 
						  </li>
						  </ul>
						 
						</div>
</nav>
	
	<div class="item">
	<img src="img/slider_3.jpg" alt="" style="width:100%;">
	</div>

<div class="row" >
	<div class = "col-md-6" style=" padding: 50px;" >
	<h1 style="color:#C92E2E">CHOOSE YOUR ISLAND</h1>
	<h4 style="color:#b9b5b5">The Philippines consists of 3 different islands (luzviminda): Luzon, Visayas and Mindanao. Find out the Historical Landmarks located on each island.</h4>
	<br /><br />
	
	<form >
		<select id="country" name="choose" placeholder="choose...">
		<h4><option id="choose">Choose</option></h4>
		<h4><option>Luzon</option></h4>
		<h4><option onclick="">Visayas</option></h4>
		<h4><option>Mindanao</option></h4>
		</select>
	</form>
	</div>

	<div class = "col-md-6" >
	
	<img src="img/slider_3.jpg" style="width:100%; align: left;">
	</div>
	</div>
	<br />
	<br />

<div class = "container-fluid" style = "background-image: url('img/background')">	

	<div class = "row text-center" id ="embed">
	<br />
		<div class = "col-md-6">
			<!-- embed -->
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ADNgEHFDYzo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class = "col-md-6">
			<h1> Discover more with videos</h1>
			<h3> It's 7,107 times more fun in the Philippines. Watch the official Philippine Department of Tourism AVP  to find out why.</h3>
			<a href = "https://www.youtube.com/user/morefunph" > Tourism Philippines</a>
		</div>
	</div>
	
	
	
	
	
	<!-- footer -->
	<div class = "row text-center" id = "footer">
		<div class = "col-md-4">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "100%" class="img-responsive" alt="Los Angeles">
		</div>
		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
			<a href = ""> Twitter</a>
			<a href = ""> Facebook  </a>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> ABOUT US</h3>
			<h4> Sitemap</h4>
			<h4> Privacy Policy</h4>
			<h4> Terms and Conditions</h4>
		</div>
		<div class = "col-md-2">
		</div>
	</div>
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>