<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = ''; // Gmail address which you want to use as SMTP server... pls enter
    $mail->Password = ''; // Gmail address Password...pls enter
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom(''); // Gmail address which you used as SMTP server...pls enter
    $mail->addAddress(''); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server pls enter)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert alert-success alert-dismissible fade show">
                 <span>Message Sent! Thank you for contacting us.</span> 
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
