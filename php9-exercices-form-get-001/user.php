
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Variables globales en PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="p-4 bg-light">
    <h1>Récupération d'un formulaire en GET</h1>
    <hr>
    <h2>Voici les variables:</h2>
    <div class="alert alert-info w-25">
        
            <?php
            echo isset($_GET['prenom']) ? 'Le prénom est: ' . $_GET['prenom'] . '<br>' : '';
            echo isset($_GET['nom']) ? 'Le nom est: ' . $_GET['nom'] : '';
            ?>
    </div>
    <hr>
</body>
</html>