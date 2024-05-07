<?php
session_start();
// $base_url = "http://sarvesh-new.test";
if (isset($_POST['submit'])) {
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';
// $recipient_email = $_POST['email'];
// $_SESSION['email']= $recipient_email;
$name = $_POST['name'];
$message = $_POST['Message'];
$email = $_POST['email'];
$subject = 'Contact Form - Way of Faith Ministeries';
$smtp_host = 'smtp.hostinger.com';
$smtp_port = 587;
$smtp_username = 'info@wayoffaithministries.com'; //username
$smtp_password = 'Faith@123'; // two step verification password

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';
$mail->Host = $smtp_host;
$mail->Port = $smtp_port;

$mail->Username = $smtp_username;
$mail->Password = $smtp_password;

$mail->setFrom($smtp_username);
$mail->addAddress($smtp_username);
$mail->Subject = $subject;
$mail->isHTML(true);
$bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message: {$message}"];
$body = join('<br />', $bodyParagraphs);
$mail->Body = $body;

	if ($mail->send()) 
	{
        // echo ('mail sent');
        header('Location: Thankyou.php');
	} else {
		echo 'Error sending email: ' . $mail->ErrorInfo;
	}
}
?>