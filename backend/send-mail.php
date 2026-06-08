<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['tel']);
$email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$type_travaux = htmlspecialchars($_POST['type']);
$message = htmlspecialchars($_POST['msg']);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPOptions = [
    'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ]
    ];
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'Glkolors.artisan@gmail.com';
    $env = parse_ini_file(__DIR__ . "/../.env");
    $mail->Password = $env["SMTP_PASS"];
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('Glkolors.artisan@gmail.com', 'Glkolors');

    $mail->isHTML(false);
    $mail->Subject = "Nouvelle demande de devis - " . $type_travaux;
    $mail->Body    = "Nom : $name\nTéléphone : $phone\nEmail : $email\nType de travaux : $type_travaux\nMessage : $message";

    if (!$mail->send()) {
        echo 'Le message n\'a pas pu être envoyé. Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Le message a été envoyé';
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}