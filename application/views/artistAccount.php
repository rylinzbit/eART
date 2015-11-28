<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Artist Account</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/artist_account_styles.css">
</head>
<body>
	<div id="container">
		<div id="left_col" class="column">
			<div id="profile_pic">
<?php
		if($profile_info['profile_pic_id'] == null){
?>
				<img class="profile_pic" src="/assets/img/default_profile.jpg" alt="default photo">
<?php
		}
?>
				<form id="upload_profile" action="artistAccountController/upload_profile_pic" method="POST">
					<input type="file" name="profile_photo">
					<input type="submit" value="Upload Profile Picture">
				</form>
			</div>
			<div id="bio">
				<p>bio edit</p>
			</div>
			<div id="about">
				<p>About their art</p>
			</div>
		</div>
		<div id="right_col" class="column">	
			<div id="upload_new_file">
				<p>Upload New Artwork</p>
				<form action="" method="POST">
					Title:<input type="text" name="title" placeholder="Title">
					Image:<input type="text" name="title" placeholder="IMG UPLOAD">
					Terms:<input type="text" name="title" placeholder="TERMS DROP DOWN MENU">
					Price:<input type="text" name="title" placeholder="PRICE">
					<textarea placeholder="about description"></textarea>
				</form>
			</div>
			<div id="edit_delete">
				<p>EDIT / DELETE table</p>
			</div>
		</div>
	</div>
</body>
</html>