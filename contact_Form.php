<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>About</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta name="viewport" content="width=device-vidth, initial-scale=1"/>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>

		<script type="text/javascript">

		   function startTime() {
				var today = new Date();
				var hours = today.getHours();
				var minutes = today.getMinutes();
				var seconds = today.getSeconds();  <!-- clock code adapted from http://www.w3schools.com/js/tryit.asp?filename=tryjs_timing_clock -->
				minutes = checkTime(minutes);
				seconds = checkTime(seconds);
				document.getElementById('text').innerHTML =
				hours + ":" + minutes + ":" + seconds ;
				var currenttime = setTimeout(startTime, 500);
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i}; 
				return i;
			}
		</script>
		
</head>
<body onload="startTime()">  <!--edit clock postioning when possible ----->
			
			
			<div id="text"></div>
		<div class="container">
		
	<!-- logo and banner -->
		<div class="row header">
			<img src="images/logo5.png" class="img-responsive" alt="Responsive image"/>
		</div>
		
	<!--Navigation still in PROGRESS -->
		<nav class="navbar navbar-default roboto normal" role="navigation">
			<div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-elements"> <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
                        </button>
                    </div>
	
				<div class="collapse navbar-collapse" id="navigation-elements">
					<ul class="nav navbar-nav">
						<li><a href="indexpage.html">Home</a></li>
						<li class="active"><a href="about.html">About</a></li>
						<li><a href="Artist.html">Artist</a></li>
						<li><a href="Exhibition.html">Exhibition</a></li>
						<li><a href="Gallery.html">Gallery</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<!--NAVIGATION ABOVE STILL IN PROGRESS-->
	
	<!--Row 1, Calender & Information 1-->
			<div class="row">
				<div class="calender col-xs-12 col-md-4">
					<h3>Today's date is ...... 
						<script type="text/javascript">
					
					var Time = new Date()
					var m = Time.getMonth() + 1      <!-- calendar code adapted from http://www.tizag.com/javascriptT/javascriptdate.php -->
					var d = Time.getDate()
					var y = Time.getFullYear()
					document.write(m + "/" + d + "/" + y)
				
					</script>	
					</h3>		
				</div>	
		
		
				<div class="info1 col-xs-12 col-sm-12 col-md-8">
					<h2>About Us</h2>
					<p>NCI Art Gallery is a website made for NCI Art Society. This website is 
					made for local artist and students in NCI to promote their artworks.
					You can see artworks from all over the local area and students art pieces.
					Artworks range from tradition art to modern art. There will be also 3d artworks like sculptures, furniture.
					For those who enjoy Photography, you can see local photographers who have
					submitted their pieces to our website.
					You can follow us in our social mnetworks and also, contact us through the 
					contact form.</p>
				</div>
			</div>
			
			<!--Row 2, Information  & Information 3-->
			<div class="row">
			<div class="info2 col-xs-12 col-sm-12 col-md-6">
				<h2>Contact Us</h2>
					<h4 class="media-heading">Check us out!</h4>
					<dl>
						<dd><a class="contact" href="https://twitter.com/nciartgalleryb1">Twitter</a></dd>
						<dd><a class="contact" href="#">Facebook</a></dd>
					</dl>
			</div>
		
	
			<form method="post" action="contact_Form.php">
					<label for="name"> Name:</label>
					<input name="name" value="" size="26" /><br/>
					<label for="email">Email:</label>
					<input name="email" value="" size="26" /><br/>
					<label for="comments">Comments:</label>
					<textarea name="comments" rows="5" cols="20"></textarea><br/>
					<input type="submit" name="submit" value="Submit" />
				</form>

				
				<!--FOOTER-->
			<div class="row footer" id="imglink">
					<ul class="footernav">
						<li class="footernav twitterlink"><a href="https://twitter.com/nciartgalleryb1">Twitter</a></li>
						<li class="footernav"><a href="#">Facebook</a></li>
					</ul>			
			</div>

			<!--This is the javascript-->
			<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<?php
if (isset($_POST['submit']))
{
	$xml = new DomDocument("1.0","utf-8");
	$xml->load('form.xml');
	
	$name = $POST['name'];
	$email = $_POST['email'];
	$comments = $POST['comments'];
	
	$rootTag = $xml->getElementByTagName("forms")->item(0);
	
	$infoTag = $xml->createElement("info");
		$nameTag = $xml->createElement("name", $name);
		$emailTag = $xml->createElement("name", $email);
		$commentsTag = $xml->createElement("name", $comments);
		
		$infoTag->appendChild($nameTag);
		$infoTag->appendChild($emailTag);
		$infoTag->appendChild($commentsTag);
		
		$rootTag1->appendChild($infoTag);
	
	$xml->save('form.xml');
	
}
?>

	</div>
</body>

</html>