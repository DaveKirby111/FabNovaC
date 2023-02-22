<?php

$messagesent = false;

    if (isset(
        $_POST['email']) && 
        $_POST['email'] != ''
        ) {

            if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $to = "dkirby111@aol.com";
                $body = " ";
                
                $sub = $subject;
                $body = $message; 

                mail($to, $sub,  $body); 

                echo "Your Email has been sent.";

                $messagesent = true;

            }

}

?>

<br>
<br>

<button onclick="location.href='/'">Return to Homepage</button>