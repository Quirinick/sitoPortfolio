<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Indirizzo email di destinazione
    $to = 'dpisolutionweb@gmail.com';

    // Oggetto dell'email
    $subject = 'Messaggio dal modulo di contatto';

    // Corpo dell'email
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Indirizzo: $address\n";
    $body .= "Telefono: $phone\n";
    $body .= "Messaggio:\n$message";

    // Intestazioni dell'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        // L'email è stata inviata con successo
        echo "Grazie! Il tuo messaggio è stato inviato.";
    } else {
        // Se c'è stato un errore nell'invio dell'email
        echo "Spiacenti, si è verificato un errore durante l'invio del messaggio.";
    }
}
?>