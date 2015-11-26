<?php
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/test.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Artwork</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/landing.css">

</head>
<body>
	<div class="artwork_container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8"><h2>$TITLE</h2></div>
			<div class="col-md-3"><button class="btn color">Back</button></div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10"><img id="ironman" src="/assets/img/ironman.jpg"></div>
			<div class="col-md-1"></div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div class="btn-group">
  					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   						Options <span class="caret"></span>
  						</button>
  					<ul class="dropdown-menu">
  				  	 	<li><a href="#">CGI </a></li>
    					<li><a href="#">Prints</a></li>
    					<li><a href="#">Background</a></li>
    					<li><a href="#">Separated link</a></li>
  					</ul>
				</div>
			</div>
			<div id="price" class="col-md-2">$price</div>
			<div class="col-md-5"></div>
			<div  class="col-md-1"><button id="cart" class="btn color">Add to Cart</button></div>
		</div>	
		
		<div class="row">
			<div class="col-md-1"></div>
			<div id="about_artist" class="col-md-3">
				<h3>About $ARTIST</h3>
				<p>I also experimented with a new way of installing these piece. Rather then 
					showing them as art objects I experimented with a fictitious museum display. 
					By painting the walls and creating didactic wall text with a fake audio tour,  
					I presented the objects as though they were in an archeological museum.</p>
			</div>
			<div class="col-md-3">
				<div id="description">
					<h3>ART $DESCRIPTION</h3>
					<p>The Last Supper – Leonardo da Vinci. This world famous painting is not 
						shown in a museum, but rather covers the back wall of the dining hall at 
						Santa Maria delle Grazie monastery in Milan, Italy. It was painted by the 
						most famous artist of all time, Leonardo da Vinci in the late 15th-century. 
						The painting depicts the scene of The Last Supper of Jesus with his disciples. 
						Seeing this masterpiece in the small monastery is truly one of the best 
						attractions Milan has to offer</p>
				</div>
			</div>

			<div class="col-md-5">
				<div id="suggested">
					<img class="col-md-4 pix" src="/assets/img/Art.jpeg">
					<img class="col-md-4 pix" src="/assets/img/Art.jpeg">
					<img class="col-md-4 pix" src="/assets/img/Art.jpeg">
				</div>
			</div>
		</div>

		<div class="row">

		</div>

	
	</div>			
</body>
</html>