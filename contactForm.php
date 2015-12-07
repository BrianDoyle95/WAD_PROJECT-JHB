<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<body>


<?php

$mail_to = 'nciartgallerybusiness@gmail.com'; 

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

//Construct Subject"
$subject = 'Message from user' . $name; //- See more at: http://webdesy.com/how-to-create-html-php-contact-form-part-2/#sthash.nAKLRYLC.dpuf

// Construct email body     
$body_message = 'From: ' . $name . "\r\n";     
$body_message .= 'E-mail: ' . $mail_from . "\r\n";         
$body_message .= 'Message: ' . $message;     

// Construct email headers     
$headers = 'From: ' . $mail_from . "\r\n";     
$headers .= 'Reply-To: ' . $mail_from . "\r\n"; 
   
$mail_sent = mail($mail_to, $subject, $body_message, $headers); 
//- See more at: http://webdesy.com/how-to-create-html-php-contact-form-part-2/#sthash.nAKLRYLC.dpuf

if ($mail_sent == true){ ?>
	<script language="javascript" type="text/javascript">         
	alert('Thank you for the message. We will contact you shortly.');     
    window.location = 'about.html';         
	</script>     
	<?php } else 
	{ ?>     <script language="javascript" type="text/javascript">    
	alert('Message not sent. Please, notify the site administrator nciartgallerybusiness@gmail.com');         
	window.location = 'about.html';     
	</script>     
	<?php     
	}
?>

</body>
</html>
