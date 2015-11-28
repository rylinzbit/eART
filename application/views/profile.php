<?php


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title>eART Store</title>
	<!-- <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/checkMyStyle.css">
</head>
<body>
<div class="col-md-1"></div>
	<div id="container" class="col-md-10">
<?php
	$this->load->view("partials/toolbar.php");
?>
		<img src="/assets/img/eye.jpg" class="col-md-4">
		<div class="col-md-8">
			<h3>About Artist Name</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="col-md-12">
		<div class="col-md-1"></div>
			<div class="col-md-10">
				<h3>
					My Art
				</h3>
				<div id="artBlurb">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		<div class="col-md-1"></div>
		</div>
		<div class="col-md-12">
			<img src="/assets/img/kiss.jpg" class="col-md-3 thumbNailImg">
			<img src="/assets/img/colors.jpg" class="col-md-3 thumbNailImg">
			<img src="/assets/img/ironman.jpg" class="col-md-3 thumbNailImg">
			<img src="/assets/img/pot.jpg" class="col-md-3 thumbNailImg">
		</div>
		<div class="col-md-12">
			<button class="thumbNailImg pull-right">More Art</button>
		</div>


	<!-- End of Container div -->
	</div>
<div class="col-md-1"></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>