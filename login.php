<?php
$to      = 'balichauhan1997@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: baliramchauhansb@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
