<?php
	
	$error = $this->session->flashdata("error");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Login - Artist</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="/assets/css/login_reg_styles.css">
</head>
<body>
	<div id="container">
		<div id="logIn" class="forms">
			<fieldset>
				<legend>Log in</legend>
				<form action="artist_login" method="POST">
					<p><?= $error ?></p>
					<input type="email" name="email" placeholder="email">
					<input type="password" name="password" placeholder="password">
					<input id="loginButton" class="button" type="submit" value="Log In">
				</form>
			</fieldset>
		</div>
		<div id="register" class="forms">
			<fieldset>
				<legend>Register</legend>
				<form action="artist_register" method="POST">
					<p><?= $error ?></p>
					<input type="text" name="first_name" placeholder="First Name">
					<input type="text" name="last_name" placeholder="Last Name">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="password" name="confirm_password" placeholder="Confirm Password">
					<input id="regButton" class="button" type="submit" value="Register">
				</form>
			</fieldset>
		</div>
	</div>
</body>
</html>