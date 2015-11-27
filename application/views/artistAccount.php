<?php
	
?>
<!DOCTYPE html>
<html>
<head>
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
					<textarea placeholder="description"></textarea>
				</form>
			</div>
			<div id="edit_delete">
				<p>EDIT / DELETE table</p>
			</div>
		</div>
	</div>
</body>
</html>