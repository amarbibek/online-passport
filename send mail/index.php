<?php
//include("../head.php");
//include("../menubar.php");
include("../connect.php");
?>
<?php
session_start();
//$email=$_SESSION['from'];
//session_destroy();
?>
<?php
if(isset($_SESSION['mail_text'])){
	$to=$_SESSION['login'];
	

$text=$_SESSION['mail_text'];

//$to= $_POST['id'];
//header('location:email_call_for_interview/index.php');
}
?>


<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'kumar.bee014@gmail.com';          // SMTP username
$mail->Password = 'intersteller'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

//$mail->setFrom('kumar.bee014@gmail.com', 'job portal');
$mail->setFrom('kumar.bee014@gmail.com', 'Online passport');
//$mail->addReplyTo('kumar.bee014@gmail.com', 'job portal');
$mail->addReplyTo('kumar.bee014@gmail.com', 'job portal');
$mail->addAddress($to);  
$mail->addAddress('kumar.bee014@gmail.com'); // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>Your Passport Status:</h3>'."<br/>";
$bodyContent .= $text."<br/>";


$mail->Subject = 'Your Passport Status';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<h4>Passport Status has been sent to your email id!</h4>';
    echo '<a href="../index.php">Goto home</a>';
}
?>
