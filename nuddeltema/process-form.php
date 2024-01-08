<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "din@email.com";
    $subject = "Ny kontaktformularbesked";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Beskeden er sendt!";
}
?>
