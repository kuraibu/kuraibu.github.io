<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $from = 'FROM: Pixels & Code';
    $to = 'info@pixelsncode.co.uk';
    $subject = $_POST['subject'];

    $body = "From: $name\n E-mail: $email\n Number: $number\n Message: $message";

    if ($_POST['submit']){
        if (mail($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent</p>';
        }else{
            echo '<p>Something went wrong, please go back and try agaiin</p>';
        }
    }
?>