<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $outil = htmlspecialchars($_POST['outil']);
    $date = htmlspecialchars($_POST['date']);
    
    $to = "guerald57@gmail.com"; // Remplace par ton adresse email
    $subject = "Nouvelle réservation d'outillage";
    $message = "Nom: $nom\nEmail: $email\nTéléphone: $telephone\nOutil: $outil\nDate de réservation: $date";
    $headers = "From: guerald57@gmail.com"; // Remplace par une adresse email de ton domaine

    if (mail($to, $subject, $message, $headers)) {
        echo "Votre réservation a été envoyée avec succès.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>
