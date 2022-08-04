<?php

 
 
$to_email = "guptasumitsg7@gmail.com";
$subject = "my fast mail whith code php";
$body = "Hi, My name is sumitt";
$headers = "From:sumitgupta6896@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>