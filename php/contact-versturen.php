<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $name = strip_tags(trim($_POST["FLName"]));

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["subject"]);

    $to = "101934@glr.nl"; // jouw inbox
    $subject = "Nieuw contactbericht van $name";

    $body = "Je hebt een nieuw bericht ontvangen via je contactformulier:\n\n";
    $body .= "Antwoorden naar: $email\n";
    $body .= "Bericht:\n$message\n";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $name = strip_tags(trim($_POST["FLName"] ?? ''));
        $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["subject"] ?? '');

        if (empty($email) || empty($message)) {
            header("Location: ../contact.html?status=error");
            exit;
        }

        $to = "101934@glr.nl";
        $subject = "Nieuw contactbericht van $name";

        $body = "Je hebt een nieuw bericht ontvangen via je contactformulier:\n\n";
        $body .= "Antwoorden naar: $email\n\n";
        $body .= "Bericht:\n$message\n";

        $headers = "From: 101934@glr.nl\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: view/contact_view.php?status=success");
            exit;
        } else {
            header("Location: ../contact.html?status=error");
            exit;
        }
    }


    $headers = "From: 101934@glr.nl\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        include 'view/contact_view.php';
    } else {
        echo "<p>Er is iets misgegaan. Probeer het later opnieuw.</p>";
    }
}
?>
