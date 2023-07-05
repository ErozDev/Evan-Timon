<?php
// Récupérer les données du formulaire
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Destinataire de l'e-mail
$to = 'evantimon560@gmail.com';

// Sujet de l'e-mail
$subject = 'Nouveau message depuis le formulaire';

// Contenu de l'e-mail
$mailContent = "Nom : $fullname\n";
$mailContent .= "Email : $email\n";
$mailContent .= "Message : $message\n";

// En-têtes de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoyer l'e-mail
if (mail($to, $subject, $mailContent, $headers)) {
    // Succès de l'envoi de l'e-mail
    echo "Message sent successfully!";
} else {
    // Échec de l'envoi de l'e-mail
    echo "Failed to send message. Please try again later.";
}
?>
