<?php
    //On démarre une nouvelle session
    session_start();
    
    //On définit des variables de session
    $_SESSION['prenom'] = 'Yann';
    $_SESSION['nom'] = 'Guenot';
    $_SESSION['age'] = 43;
?>
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
    <h1>Infos serveur / client en PHP</h1>
    <hr>
    <h2>Votre user agent:</h2>
    <div class="alert alert-info w-25">
        
            <?php
            echo $_SERVER['HTTP_USER_AGENT'];
            ?>
    </div>
    <hr>
    <h2>Votre adresse IP:</h2>
    <div class="alert alert-info w-25">
        
            <?php
            echo $_SERVER['REMOTE_ADDR'];
            ?>
    </div>
    <hr>
    <h2>Nom du serveur:</h2>
    <div class="alert alert-info w-25">
        
            <?php
            echo $_SERVER['HTTP_HOST'];
            ?>
    </div>
    <hr>
    <h2>Changeons de page</h2>
    <nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="./page2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="./page3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="./page4.php">4</a></li>
  </ul>
</nav>
<?php
    $_SESSION['nom'] = 'Guenot';
    $_SESSION['prenom'] = 'Yann';
    $_SESSION['age'] = 43;

?>

</body>
</html>