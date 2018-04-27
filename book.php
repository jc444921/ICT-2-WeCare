<?php
session_start();
include_once('include/config.php');

if(isset($_REQUEST['book'])){
	$username = $_REQUEST['userName'];
	$lastname = $_REQUEST['lastName'];
	$email_address = $_REQUEST['email_address'];
	$phone = $_REQUEST['userPhone'];
	$bookingdate = $_REQUEST['bookingdate'];
	$bookingservise = $_REQUEST['bookingservice'];
	$notes = $_REQUEST['notes'];
	$sql = "insert into Booking(First_Name, Last_Name, Email, Contact_No, Booking_Date, Booking_Service, Notes)value('".$username."','".$lastname."','".$useremial."','".$phone."','".$bookdate."','".$bookingservice."','".$notes."')";
	$inserted = $conn->query($sql);
	if($inserted){
		$posted = true;
		$msg = 'Seccessfully Booked!';
	}
}
	

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
		<link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
				<?php include("include/nav.inc")?>
                <script src="js/nav.js"></script>
		</header>
		<section class="sign_up" style="background-color:#FCFCFC">
			<div class="container">
				<div class="row">
					<div class="sign-up">
						<h2 class="logo-header">Booking appointment now!</h2>
                        <?php if($posted){
							if ($msg){
								?>
                                <span class="msg"><?php echo $msg; ?></span>
                        <?php }}?>
						<form method="post">
                        	<div class="col-12 col-s-12 ">
                        	<div>
                            	<span><label>First Name</label></span>
                                <input class="signup-input" type="text" name="userName" value="" placeholder="First name..." title="Please enter your first name." required></span>
                            </div>
                            <br>
                            <div>
                            	<span><label>Last Name</label></span>
                                <input class="signup-input" type="text" name="lastName" value="" placeholder="Last name..." title="Please enter your last name." required></span>
                            </div>
                            <br>
                            <div>
                            	<span><label>Book Date</label></span>
                                <input class="signup-input" type="text" name="bookingdate" value="" placeholder="Choosing your booking date by DD/MM/YY." title="Please choose your favour booking date." required>
                            </div>
                            <br>
                            <div>
                            	<span><label>Book service</label></span>
                                <input class="signup-input" type="text" name="bookingservice" value="" placeholder="Choosing your booking services..." title="Please choose your favour booking services." required></span>
                            </div>
                            </div>
                            <br>
                            <div>
                            	<span><label>Phone No.</label></span>
                              <input class="signup-input" type="text" name="userPhone" value="" placeholder="Enter your mobile numbers..." required>
                            </div>
                            <br>
                            <div>
                            	<span><label>E-mail:</label></span>
								<input class="signup-input" type="email" name="email_address" value="" placeholder="enter your email..." title="Please enter a valid email address." required>
							</div>
                            <br>
                            <div>
                            	<span><label>Notes</label></span>
                              <input class="textbox" type="text" name="notes" style="width:350px; height:100px;">
                            </div>
                            <br>
                            <div>
                            	<button type="submit" class="submit-btn" name="book">Book</button>
                            </div>
                            </div>
						</form>
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