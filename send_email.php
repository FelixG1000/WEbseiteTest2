<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    $to = "jenewein.felix@gmail.com"; // Ersetzen Sie dies durch Ihre E-Mail-Adresse
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Ihre Nachricht wurde erfolgreich gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
}
?>
