<?php

include_once('mailer/PHPMailerAutoload.php');
$configs = include('config.php');


if($_POST) {
    $email = trim(stripslashes($_POST['email']));

    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Email incorrect";
    }


    if (!$error) {
    $message .= "Email address: " . $email . "<br />";

    $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";


    $mail = new PHPMailer;

    $mail->isSMTP();
//    $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $configs['username'];
    $mail->Password = $configs['password'];
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($configs['fromEmail'], 'Site hereyougo.io');
    $mail->addAddress($configs['adminEmail'], 'Admin hereyougo');
    $mail->WordWrap = 50;
    $mail->isHTML(true);

    $mail->Subject = 'HEREYOUGO.IO: New request for investment (page: crowdfunding-tesla.php)';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }

        echo 'OK';
    } else {
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;

        echo $response;

    }
}

?>
