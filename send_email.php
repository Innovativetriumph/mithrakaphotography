<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//$mail->SMTPDebug  = 1;
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 25;

//$mail->Username = "calwinhospital@gmail.com";
$mail->Username = "mithraphotographyka@gmail.com";
//$mail->Password = "rwaoqdvmojxysmji"; 
$mail->Password = "qvvtpqmdiljsjgld"; 


$mail->setFrom($email, $name);
$mail->addAddress("mithraphotographyka@gmail.com", "Mithraphotographyka");

$mail->Subject = $subject;
$mail->Body = "Email: " . $email . "\n" .
              "Phone: " . $phone . "\n" .
              "Message: " . $message;


$mail->send();

header("Location: thankyou.html");
    



?>
