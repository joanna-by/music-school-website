<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];
    $from = 'From: MoozoMontownia'; 
    $to = 'kontakt@moozomontownia.pl'; 
    $subject = 'Zapisy na zajecia';
    $zajecia_value = $_POST['zajecia'];

    $body = "From: $name\n Phone: $phone\n E-Mail: $email\n Age: $age\n Message:\n $message $zajecia_value\n";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            print '<script type='text/javascript'>alert('$Twoja wiadomość została wysłana');</script>';
        } else { 
            print '<p>Coś poszło nie tak, spróbuj jeszcze raz!</p>'; 
        }
    }
?>