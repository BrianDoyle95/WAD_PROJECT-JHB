

<html>
	<head>
	

	</head>
	<body>  <!--edit clock postioning when possible ----->
		
		
		<?php
if (isset($_POST['submit']))
{
	$xml = new DomDocument("1.0","utf-8");
	$xml->load('form.xml');
	
	$name = $POST['name'];
	$email = $_POST['email'];
	$comments = $POST['comments'];
	
	$rootTag = $xml->getElementByTag("forms")->item(0);
	
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


	</body>
</html>



