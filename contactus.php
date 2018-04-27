<?php
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
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
				<?php include("include/nav.inc")?>
                <script src="js/nav.js"></script>
		</header>
        <div class="row">
        		<div class="col-md-8 col-md-offset-2">
					<h1 align="center" style="color:#D6DC9C" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px" >We Care</h1>
					<p class="text-intro">Welcome to our endearing family. At WeCare, our mission is to assist you to fully relax and unwind from the hectic pace of everyday life. Not only do we ensure your peace at our care, but also in your day to day life. We are located within a short distance from Brisbane CBD which has proven to be convenient to most our clients. Come and experience the blissful solitude. </p>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<h2 align="center": style="color:#B1D087 "><b>LOCATE US</b></h2>
					
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56621.6159180479!2d152.97503350007412!3d-27.505009135848912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9156cdadcf48b7%3A0x72f7b1801d279b83!2sWeCARE+Massage+%26+Natural+Therapy!5e0!3m2!1sen!2sau!4v1517023868763" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>

<h2><b>FEEL FREE TO GET IN TOUCH WITH US </b></h2>
											<p><b><h3>...to enquire about services or book an appointment </h3></p>
                                            <p>We bestow a much soothing enclosure with professional yet friendly attitudes towards our clients in We Care msasage and therapy. All our therapists are highly qualified, trained by the best, with excellent massage expertise from well known professionals. Not only that, they maintain charming people skills as well. Relax in our positive environment with scents of aromatherapy in the air along with musical frequencies and a dim lighting to enhance the experience to all senses making it a complete treat of good vibes and auras.It is our duty to deliver the most pleasing experience tailored to your need. This is your ideal destination away from the hustle and bustle of the busy life, away from the city, in a calming environment to assure your complete rest. .</p>
  
  
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
                                            
<!-- Footer -->
		<?php include 'include/footercon.inc'?>
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