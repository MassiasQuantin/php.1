<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $errors = [];

    if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($sujet) || empty($message)) {
        $errors[] = "Tous les champs doivent être remplis.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Le format de l'email est invalide.";
    }

    if (count($errors) == 0) {
        echo "<div class=\"container bg-light border rounded p-5\">";
        echo "<h1>Merci pour votre contact</h1>";
        echo "<p>Merci " . htmlspecialchars($prenom) . " " . htmlspecialchars($nom) . " de nous avoir contacté à propos de “" . htmlspecialchars($sujet) . "”.</p>";
        echo "<p>Un de nos conseillers vous contactera soit à l’adresse " . htmlspecialchars($email) . " ou par téléphone au " . htmlspecialchars($telephone) . " dans les plus brefs délais pour traiter votre demande :</p>";
        echo "<p>" . htmlspecialchars($message) . "</p>";
        echo "<h2 class=\"text-center mt-5\">Bonne journée ! 😄</h2>";
        echo "</div>";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
