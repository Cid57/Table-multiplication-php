<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Table de multiplication</title>
    <style>
        body {
            font-family: 'Protest Revolution', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }


        h1 {
            text-align: center;
            color: #333;
            font-size: 40px;
        }

        form {
            margin-top: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-size: 18px;
            color: #333;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #72A1E5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 2px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #72A1E5;
            color: white;
        }

        /* // Ligne paire */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Ligne impaire */
        tr:nth-child(odd) {
            background-color: #ddd;
        }

        p.error {
            color: red;
        }

        .center {
            text-align: center;
            font-size: 28px;
            color: red;
        }
    </style>
</head>

<body>
    <h1>Table de multiplication</h1>
    <form method="GET" action="">
        <label for="table">Entrez un nombre :</label>
        <input type="number" name="table" id="table" required>
        <button type="submit">Générer</button>
    </form>

    <?php
    // Vérifie si un paramètre table est présent dans l'URL et s'il est numérique.
    if (!empty($_GET['table']) && is_numeric($_GET['table'])) {
        $table = $_GET['table'];

        // Vérifier si la valeur est positive
        if ($table >= 0) {
            // Afficher l'en-tête de la table
            echo "<h2>Table de multiplication de $table :</h2>";
            echo "<table>";
            echo "<tr><th>$table x</th><th>Résultat</th></tr>";

            // Boucle pour générer les lignes de la table
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $table * $i;
                echo "<tr><td>$table x $i</td><td>$resultat</td></tr>";
            }

            echo "</table>";
        } else {
            // Si la valeur est négative, afficher un message d'erreur
            echo "<p class='center'>Veuillez entrer un nombre positif.</p>";
        }
    } else {
        // Si aucun paramètre valide n'est passé dans l'URL
        if (isset($_GET['table'])) {
            echo "<p class='center' >Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>

</html>