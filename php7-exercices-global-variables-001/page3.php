<?php
    //On démarre une nouvelle session
    session_start();
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
    <h1>Récupération des cookies</h1>
    <hr>
    <h2>Voici les cookies:</h2>
    <div class="alert alert-info w-50">
        
            <?php
            if(isset($_COOKIE['name'])){
                echo 'Votre nom est ' .$_COOKIE['name']. '<br>';
            }
            if(isset($_COOKIE['pass'])){
                echo 'Votre password est ' .$_COOKIE['pass'];
            }else{
                echo 'Pas de cookie stocké';
            }
        ?>
    </div>
    <hr>
    


    <hr>
    <h2>Changeons de page</h2>
    <nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./index.php">1</a>
      
    </li>
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./page2.php">2</a>
      
    </li>
    <li class="page-item active">
      <span class="page-link">3</span>
    </li>
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./page4.php">4</a>
      
    </li>
  </ul>
</nav>
</body>
</html>