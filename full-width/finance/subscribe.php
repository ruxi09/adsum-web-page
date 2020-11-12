<?php
	$to = "alex@adsum.works"; // this is your Email address
	$from  = $_POST['subsEmail']; // this is the sender's Email address

	$subject = "New subscriber";
	$message = "A new subscriber appeared " .  $from;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>