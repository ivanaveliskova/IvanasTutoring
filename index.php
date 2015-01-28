<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $from = 'From: Tutoring'; 
    $to = 'ivanaveliskova@gmail.com'; 
    $subject = 'Hello';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
				 
    if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
?>