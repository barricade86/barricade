<?php
 require __DIR__.'/vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
 $mail=new PHPMailer();
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Username='shilov.kirill.transas@gmail.com';
 $mail->Password='qwertyASDFGHzxcvbn';
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'ssl';
 $mail->Port = '465';
 $mail->addAddress('shilov.kirill.transas@gmail.com');
 $mail->Body='Created news';
 $mail->AltBody='Body created';
 $mail->send();
 echo 'Err='.$mail->ErrorInfo;
 $mail->clearAddresses();
