<?php
// Inicializa las variables
$name = $email = $message = $human = "";
$errName = $errEmail = $errMessage = $errHuman = "";
$result = "";

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valida el nombre
    if (empty($_POST["name"])) {
        $errName = "Please enter your name";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Valida el correo electrónico
    if (empty($_POST["email"])) {
        $errEmail = "Please enter your email address";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Invalid email format";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Valida el mensaje
    if (empty($_POST["message"])) {
        $errMessage = "Please enter your message";
    } else {
        $message = test_input($_POST["message"]);
    }

    // Valida la respuesta humana
    if (empty($_POST["human"])) {
        $errHuman = "Please answer the question";
    } elseif ($_POST["human"] != 5) {
        $errHuman = "Incorrect answer";
    } else {
        $human = test_input($_POST["human"]);
    }

    // Si no hay errores, procesa los datos
    if ($errName == "" && $errEmail == "" && $errMessage == "" && $errHuman == "") {
        $to = "pedro.galvis.talentotech@usa.edu.co"; // Cambia esto por tu dirección de correo
        $subject = "Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $result = "<p class='text-success'>Message sent successfully!</p>";
        } else {
            $result = "<p class='text-danger'>Sorry, there was an error sending your message. Please try again later.</p>";
        }
    }
}

// Función para limpiar los datos de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
