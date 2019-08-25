<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: MoozoMontownia'; 
    $to = 'j.bykowska@gmail.com'; 
    $subject = 'Zapisy na zajecia';
    $zajecia_value = $_POST['zajecia'];

    $body = "From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message $zajecia_value\n";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Twoja widomość została wysłana!</p>';
        } else { 
            echo '<p>Coś poszło nie tak, spróbuj jeszcze raz!</p>'; 
        }
    }
?>