<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "guerald57@gmail.com"; // Remplace par ton adresse email
    $subject = "Nouveau message de contact";
    $body = "Nom: $nom\nEmail: $email\nMessage: $message";
    $headers = "From: guerald57@gmail.com"; // Remplace par une adresse email de ton domaine

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>
