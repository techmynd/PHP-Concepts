<?php

	$passVarOne = "Javed";
	$passVarTwo = "info@receiving-server-email-address.com"; // must be valid registered email address at the server
	$passVarThree = " hi this is the main message ... just testing ";
	$cfrm_email_title = "You have got an email";
	$cfrm_receiver_email = "email-receiver@gmail.com"; // it can be server email too 

	    require('PHPMailer.php');
		require('Exception.php');

			//$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
		    $mail->CharSet = 'UTF-8';
		try {
		    //Recipients

		    $mail->setFrom($passVarTwo, $passVarOne);
		    $mail->addAddress($cfrm_receiver_email, 'Javed');     // Add a recipient
		    $mail->addReplyTo($passVarTwo, $passVarOne);

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $cfrm_email_title;
		    $mail->Body    = '
		     Hello
		     You have received an email from '.$passVarOne.' and email address '.$passVarTwo.' <br>
		     Message details are below:<br>
		     '.$passVarThree.' <br><br>
		     Javed Khalil
		    ';
		    $mail->AltBody = '
             Hello - You have received an email from '.$passVarOne.' and email address '.$passVarTwo.' 
		     Message details are here: '.$passVarThree.' - Javed Khalil
		    ';

		    $mail->send();
		    echo 'Message sent successfully';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}

		// simple email test
		
		/*
		mail("receiver@gmail.com","My subject",'hi and hello');
		$sender = 'info@sender-server.com';
		$recipient = 'receiver@gmail.com';
		$subject = "php mail test";
		$message = "php test message";
     	$headers = 'From:' . $sender;
		if (mail($recipient, $subject, $message, $headers))
		{
		    echo "Message accepted";
		}
		else
		{
		    echo "Error: Message not accepted";
		}
		*/


?>