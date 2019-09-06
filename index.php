<?php

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];
    $from = 'From: MoozoMontownia'; 
    $to = 'kontakt@moozomontownia.pl'; 
    $subject = 'Zapisy na zajecia';
    $selectOption = $_POST['sourceOption'];
    
    $body = "Nadawca: $name\n Telefon: $phone\n E-Mail: $email\n  Skad o nas wiesz: $selectOption\n Wiek: $age\n Wiadomosc: $message\n Wybrane zajecia:" . implode(',', $_POST['zajecia']);

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
            include "message.html";
	    header("Refresh:2; URL=index.html");
        // header('Location: /index.html');
        } else { 
            print '<p>Coś poszło nie tak, spróbuj jeszcze raz!</p>'; 
        }
    }
?>