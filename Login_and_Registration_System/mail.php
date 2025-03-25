<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


function sendMail($to,$subject,$body){
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username ="harunselcuk56@gmail.com";
        $mail->Password = "";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port =587;
        $mail->Host = 'smtp.gmail.com';

        $mail-> setFrom('harunselcuk56@gmail.com', 'Harun Selcuk');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        

        $mail->send();
    } catch (\Throwable $th) {
        return "Mail Error:  {$mail->ErrorInfo}";
    }
    
}




?>
