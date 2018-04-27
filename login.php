<?php
session_start();
include_once('include/config.php');

$posted = false;
if (isset($_REQUEST['login'])){
	$posted = true;
	$username = $_POST['username'];
	$password = $_POST['password'];
	//find admin data from DB
	$sql = "SELECT id FROM admin where username='$username' AND password='$password'";
	$result = $conn -> query($sql);
	if ($result->num_rows>0){
		$row=$result->fetch_assoc();
		$_SESSION['user_id']=$row["id"];
		header('Location: index.php');
	}
	else{
		$msg="Invalid Username OR Password";
	}
	$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap Dashboard by Bootstrapious.com</title>
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
		<div class="container-fluid intro" id="about">
			<div class="row">
					<div class="page login-page">
                    	<div class="container">
                    		<div class="form-outer text-center d-flex align-items-center">
                    			<div class="form-inner">
                                	<div class="logo text-uppercase"><span>Admin</span>
                                    <br><strong class="text-primary">Dashboard</strong>
                                	</div>
                                    <!--Log In Form-->
                                    <form id="login-form" method="post">
                                    <div class="form-group">
                                    	<input id="login-username" type="text" name="username" placeholder="Username" required=""></div>
                                    <div class="form-group">
                                    	<input id="login-password" type="text" name="password" placeholder="Password" required=""></div>
                                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                                    <br><span><?php if ($posted){if($msg){echo $msg;}}?></span>
                                    </form>   
                             	</div>
                        	</div>
                        </div>
                    </div>
                    </div>
                    </div>
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