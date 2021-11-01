<?php
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'tls://smtp.mail.ru';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'grek.ali@mail.ru';                 
    $mail->Password   = 'SxieLnAGLZAL5MqTZKRN';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('grek.ali@mail.ru');           
    $mail->addAddress('grek.ali@mail.ru');

       
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST['header'] . ' ' . $_POST['email'];
    $mail->Body    = $_POST['message'];
 
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  
?>