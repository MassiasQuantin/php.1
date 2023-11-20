<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="thanks.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Formulaire de Contact</h1>

        <p class="row">
            <label for="nom" class="form-label">Nom : </label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </p>

        <p class="row">
            <label for="prenom" class="form-label">Prénom : </label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </p>

        <p class="row">
            <label for="email" class="form-label">E-mail : </label>
            <input type="email" name="email" id="email" class="form-control" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
        </p>

        <p class="row">
            <label for="telephone" class="form-label">Téléphone : </label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
        </p>

        <p class="row">
            <label for="sujet" class="form-label">Sujet : </label>
            <select id="sujet" name="sujet" class="form-select" required>
                <option value="Service Client">Service Client</option>
                <option value="Support Technique">Support Technique</option>
                <option value="Autre">Autre</option>
            </select>
        </p>

        <p class="row">
            <label for="message" class="form-label">Message : </label>
            <textarea name="message" id="message" class="form-control" required></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
