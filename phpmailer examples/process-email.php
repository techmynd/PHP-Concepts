<?php

	require('phpmailer/PHPMailer.php');
	require('phpmailer/Exception.php');

	if( isset($_POST['passVarOne']) && isset($_POST['passVarTwo']) && isset($_POST['passVarThree']) ) {

		// trim and sanitize variables
		$senderName = strip_tags(trim($_POST['passVarOne']));
		$senderEmail =  strip_tags(trim($_POST['passVarTwo']));
		$senderMessage = strip_tags(trim($_POST['passVarThree']));

		// set these two // email title and receiver email
		$cfrm_email_title = $_POST['passVarEmailSubject'];
		$cfrm_receiver_email = $_POST['passVarReceiverEmail'];

		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		
		try {

		    $mail->setFrom('info@registered-server-address.com', $senderName);
		    $mail->addAddress($cfrm_receiver_email, 'Javed');     // Add a recipient
		    $mail->addReplyTo('info@registered-server-address.com', $senderName);
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $cfrm_email_title;
		    $mail->Body    = '
		     Hello
		     You have received an email from '.$senderName.' and email address '.$senderEmail.' <br>
		     Message details are below:<br>
		     '.$senderMessage.' <br><br>
		     Javed Khalil
		    ';
		    $mail->AltBody = '
             Hello - You have received an email from '.$senderName.' and email address '.$senderEmail.' 
		     Message details are here: '.$senderMessage.' - Javed Khalil
		    ';

		    $mail->send();
		    //echo 'Message sent successfully';
			} catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}

	}
	else{
		echo "Please fill required fields!";
	}

?>