<?php


use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = " ";

if(isset($_POST['submit']))
{
$name = $_POST['user_name'];
$cname = $_POST['company_name'];
$email = $_POST['email'];
$country = $_POST['country'];
$city = $_POST['city'];
$p_code = $_POST['postal_code'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$subject = "Confirmation! Your message has been submitted successfully - GMP";


try{
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username ='arhamtayyab553@gmail.com';
   $mail->Password = 'jrwjontwvdtrpmfm';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;

   $mail->setFrom($email, $name);
   $mail->addAddress('arhamweb123@gmail.com');

   $mail->isHTML(true);
   $mail->Subject = "Message received from Contact: " . $name;
   $mail->Body = "Client Name : " . $name . "\n" . 
                  "Company Name : " . $cname . "\n" . 
                  "Email Address : " . $email . "\n" . 
                  "Country : " . $country . "\n" .
                  "City : " . $city . "\n" . 
                  "Postal code : " . $p_code . "\n" . 
                  "Phone # : " . $phone . "\n" . 
                  "His Message : " . $msg;

                  $mail->send();
                  
header('Location:mail.html');
      //             $alert= "<div class='alert alert-success alert-dismissible fade show' role='alert'><span>Message sent, Thanks!</span>
      //             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      //       <span aria-hidden='true'>&times;</span>
      //   </button></div>";

}catch(Exception $e){
   $alert = "<div class='alert alert-error alert-dismissible fade show' role='alert'><span'.$e->message().'</span>
   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button></div>";
}

}


?>