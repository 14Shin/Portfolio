<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message reçu</title>
    <style>
        body {
            font-family: 'Diphylleia', serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
            text-align: center;
        }
        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }
    </style>
</head>
<body>
    <section>
        <h2>Message reçu</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $message = nl2br($_POST['message']);

            echo "<p>Merci, $prenom $nom, pour votre message :</p>";
            echo "<p>$message</p>";
        } else {
            echo "<p>Une erreur est survenue. Veuillez réessayer.</p>";
        }
        ?>
    </section>
</body>
</html>
