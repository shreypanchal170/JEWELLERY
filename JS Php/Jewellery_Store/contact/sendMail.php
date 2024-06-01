<?php

include "include/class.phpmailer.php";
include "include/class.smtp.php";


if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message']))
{
	echo "<script>alert('Please fill all fields');</script>";
	echo "<script>window.location.href='a.php'</script>";
}

//send mail
else
{
	
	$mail = new PHPMailer;
	//$mail->SMTPDebug  = 1;   

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'Enter Email Address Here';                 // SMTP username
	$mail->Password = 'Enter Password Here';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
	$mail->Port       = 465;  
	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['name'];
	$mail->AddReplyTo = $mail->From;
	
	$mail->addAddress('Enter Recipients Address Here', 'Enter Recipients Name Here');     // Add a recipient
	$mail->Subject = 'Queries From BB Jewellery Store';
	$mail->Body    = "Message from " . $_POST['email'] . ":" . $_POST['message'];
	$mail->AddReplyTo($_POST['email'], $_POST['name']);

	if(!$mail->send()) {
    echo 'Message could not be sent. <br />';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo header( "refresh:3;url=../index-1.php" );
	} else {
	    echo 'Message has been sent';
	    echo '<br /><b>We will contact you soon!</b><br />';
		echo header( "refresh:3;url=../index-1.php" );
	}

}