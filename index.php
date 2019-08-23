<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: MoozoMontownia'; 
    $to = 'j.bykowska@gmail.com'; 
    $subject = 'Zapisy na zajecia';

    $body = "From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
?>