<?php
    //On démarre une nouvelle session
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    setcookie('name', $_POST["name"]);
    setcookie('pass', $_POST["pass"]);
}
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
    <h1>Variables de session</h1>
    <hr>
    <h2>Voici les variables:</h2>
    <div class="alert alert-info w-25">
        
            <?php
            echo 
            'Nom: ' .$_SESSION['nom']. '<br>' . 
            'Prénom: '. $_SESSION['prenom']. '<br>
            Age:  '. $_SESSION['age'];
            ?>
    </div>
    <hr>
    <h2>Gestion des cookies</h2>
    <form action="./page2.php" method="post">
  <div class="col-md-3 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="col-md-3 mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<div class="alert alert-info w-25">
        
            Vous pouvez récupérer les cookies page 3
    </div>

    <hr>
    <h2>Changeons de page</h2>
    <nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./index.php">1</a>
      
    </li>
    <li class="page-item active">
        <span class="page-link">2</span>
    </li>
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./page3.php">3</a>
      
    </li>
    <li class="page-item " aria-current="page">
        <a class="page-link" href="./page4.php">4</a>
      
    </li>
  </ul>
</nav>
</body>
</html>