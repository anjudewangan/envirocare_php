<?php


use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$emailformat = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$txtEmail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);


if (!preg_match($emailformat, $txtEmail) && !empty($txtEmail)) {

	echo json_encode(array("class_name" => 'email', "error" => "Please enter valid email id"));
	exit;
} elseif ((strlen($_POST["phoneno"]) < 10 || strlen($_POST["phoneno"]) > 10) && !empty($_POST["phoneno"])) {

	echo json_encode(array("class_name" => 'phoneno', "error" => "Phone number must be equal to 10 digit"));
	exit;
} elseif (empty($_POST["subject"])) {

	echo json_encode(array("class_name" => 'subject', "error" => "Please enter subject"));
	exit;
} elseif (empty($_POST["message"])) {

	echo json_encode(array("class_name" => 'message', "error" => "Please write your message"));
	exit;
} else {


	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SetLanguage('en');
	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.googlemail.com';
	$mail->Username = 'enviro2connect@gmail.com';
	$mail->Password = 'valdbjbsmsjtpjhb';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->SMTPKeepAlive = true;
	$mail->setFrom('enviro2connect@gmail.com', 'Envirocare');
	$mail->Subject = 'Enviro Connect from Envirocare';
	$mail->CharSet = 'utf-8';

	$mail->addAddress('envirocare4you@gmail.com', '');

	$content = file_get_contents(dirname(__FILE__) . '/message.html');
	$content = str_replace('%fullname%', $_POST["fullname"], $content);
	$content = str_replace('%email%', $_POST["email"], $content);
	$content = str_replace('%phoneno%', $_POST["phoneno"], $content);
	$content = str_replace('%subject%', $_POST["subject"], $content);
	$content = str_replace('%message%', $_POST["message"], $content);

	$mail->msgHTML($content, __DIR__);

	if (!$mail->Send()) {
		echo json_encode(array("class_name" => 'success-message', "error" => 'Error while sending Email.: ' . $mail->ErrorInfo));
	} else {
		echo json_encode(array("class_name" => 'success-message', "msg" => 'Awesome start! Your green commitment is noted. Expect a response from us soon.!'));
	}
	$mail->clearAddresses();
	$mail->smtpClose();

	exit;
}
