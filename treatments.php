<?php
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yebo HTML5 CSS3 Template</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css?v=1.2" rel="stylesheet">
		<link href="css/queries.css?v=1.2" rel="stylesheet">
		<link href="css/readmore.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	
    <style>
	
		
	img
	{  border-radius: 35px;}
{
    box-sizing: border-box;
}



.container {
    position: relative;
    max-width: 100%;
    margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

.column {
    float: left;
    width: 50%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
    .column {
        width: 100%;
		
    }
}

/* Transparent Image overlay*/


</style>
  <script src="js/show_text.js"></script>
    </head>
<body>
    
  
<header>
				<div class="container">
				<div class="row">
					<a href="index.php"><div class="responsive-logo" style="width:126px; heigh:109px; margin-top:-5px;"></div></a>
					<div class="pullcontainer"> <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-offset-0 col-lg-12">
<nav>
  <ul class="clearfix">
		    					<li><a href="whyus.php">Why Us</a></li>
                                <li class="dot">.</li>
                                <li><a href="treatments.php">Treatments</a></li>
								<li class="dot">.</li>
								<li><a href="special.php" class="r_spacer">Specials</a></li>
								<a href="index.php"><div class="logo-holder"></div></a>
								<li><a href="book.php">Book Online</a></li>
								<li class="dot">.</li>
								<li><a href="login.php">Admin</a></li>
								<li class="dot">.</li>
                                <li><a href="contactus.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="hero"></div>                <script src="js/nav.js"></script>
		</header>
		<div class="container-fluid intro" id="about">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 align="center" style="color:#EDDA74" font-size:"18px"="">OUR TREATMENTS</h1>
					<p class="text-intro">Welcome to WeCare Massage, our mission is to assist you to fully relax and unwind from the hectic pace of everyday life. Conveniently located within a short distance from the city, WeCare Massage offers individual as well as group treatments and packages designed for your pampering and well-being. </p>
				</div>
			</div>
		</div>
        <div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 align="center" :="" style="color:#EDDA74 "><b>POPULAR TREATMENTS</b></h2>
					
<div class="row">
 <div class="column">
<h3 style="color:#99C68E" align="center"><b>REFLEXOLOGY</b></h3>
<img src="img/Treament_7.png" style="width:100%" alt="Mountains">
<p align="left">Refexology is the applIcation of appropriate pressure to specific points and areas on the feet. The reflex points in these areas correspond to different body organs and systems and pressing them has been beneficial on the organs and general health.
</p><p><span style="display:none;" id="expand-text">It is based on a pseudoscientificsystem of zonesthat purportedly reflect an image of the body on the feet and hands.</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onclick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
<p></p>													
</div>
  
  
<div class="column">
<h3 style="color:#99C68E" align="center"><b>NECK AND SHOULDER MASSAGE</b></h3>
<img src="img/Treament_1.png" style="width:100%" alt="Mountains">
<p align="left">This is a seated massage. Mainly cause due to sleeping at a wrong position. It causes invoulantry muscle contractions in the cervical region that can lead to abnormal position and pain. This treatment helps to recover the range of neck movement and to relieve pains.
</p><p><span style="display:none;" id="expand-text">Flexible working environment. All equipment is provided. .</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onclick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
<p></p>  													
</div>


<div class="row">
  <div class="column">
<h3 style="color:#99C68E" align="center"><b>HEAD MASSAGE</b></h3>
<img src="img/Spa.jpg" style="width:100%" alt="Mountains">
<p align="left">This is a seated massage. Mainly cause due to sleeping at a wrong position. It causes invoulantry muscle contractions in the cervical region that can lead to abnormal position and pain. This treatment helps to recover the range of neck movement and to relieve pains.
</p><p><span style="display:none;" id="expand-text">Flexible working environment. All equipment is provided. .</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onclick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
<p></p>  													
</div>

  
 <div class="column">
<h3 style="color:#99C68E" align="center"><b>LOWER BACK MASSAGE</b></h3>
<img src="img/Treament_6.png" style="width:100%" alt="Mountains">
<p align="left">This is a seated massage. Mainly cause due to sleeping at a wrong position. It causes invoulantry muscle contractions in the cervical region that can lead to abnormal position and pain. This treatment helps to recover the range of neck movement and to relieve pains.
</p><p><span style="display:none;" id="expand-text">Flexible working environment. All equipment is provided. .</span> <a id="expand-click" href="javacript:;" style="text-decoration:none;" onclick="show_text('expand-click','expand-text','inline')"> Read more</a></p>
<p></p>  													
</div>
</div>




  
</div>
				</div>
			</div>
		
        <p>If you are looking for relaxation and ease of mind on your busy schedule, visit us</p>
<div class="container">
  <img src="img/backgroundimage2.jpg" style="width:100%" alt="Mountains">
  <div class="content">
    <h1 align="center">We Care</h1>
    <p>Immerse yourself in a world of serenity and journey into a sense of wellbeing.</p>
  </div>
</div>
		
		<section class="discover">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<a href="book.php" class="shop-btn">BOOK YOUR MASSAGE ONLINE</a>
					</div>
				</div>
			</div>
		</section>

		<?php include 'include/footer.inc'?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/waypoints.min.js"></script>
	
</body>
</html>