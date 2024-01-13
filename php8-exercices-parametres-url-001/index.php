
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Paramètres d'URL en PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="p-4 bg-light">
  <h1>Les paramètres d'URL</h1>
  <hr>
  <h2>Tester les paramètres d'URL</h1>
  <?php
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    $prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : "";
    $age = isset($_GET["age"]) ? $_GET["age"] : "";
    $dateDebut = isset($_GET["dateDebut"]) ? $_GET["dateDebut"] : "";
    $dateFin = isset($_GET["dateFin"]) ? $_GET["dateFin"] : "";
    $langage = isset($_GET["langage"]) ? $_GET["langage"] : "";
    $serveur = isset($_GET["serveur"]) ? $_GET["serveur"] : "";
    $semaine = isset($_GET["semaine"]) ? $_GET["semaine"] : "";
    $batiment = isset($_GET["batiment"]) ? $_GET["batiment"] : "";
    $salle = isset($_GET["salle"]) ? $_GET["salle"] : "";
  ?>
        <p>
        <a href="./index.php">Index sans paramètres</a>
        </p>
      <p>
      <a href="./index.php?nom=Nemare&prenom=Jean">index.php?nom=Nemare&prenom=Jean</a>
    </p>
    <p>
      <a href="./index.php?age=22">index.php?age=22</a>
    </p>
      <p>
      <a href="./index.php?dateDebut=2/05/2016&dateFin=27/11/2016">index.php?dateDebut=2/05/2016&dateFin=27/11/2016</a>
      </p>
      <p>
      <a href="./index.php?langage=PHP&serveur=LAMP">index.php?langage=PHP&serveur=LAMP</a>
      </p>
      <p>
      <a href="./index.php?semaine=12">index.php?semaine=12</a>
      </p>
      <p>
      <a href="./index.php?batiment=12&salle=101">index.php?batiment=12&salle=101</a>
      </p>
    <div class="alert alert-info w-25">
        <?php
           echo isset($_GET["nom"]) ? 'Paramètre "nom": ' . $nom . '<br>' : '';
           echo isset($_GET["prenom"]) ? 'Paramètre "prenom": ' . $prenom . '<br>' : '';
           echo isset($_GET["age"]) ? 'Paramètre "age": ' . $age . '<br>' : 'Le paramètre "age" n\'est pas défini<br>';
           echo isset($_GET["dateDebut"]) ? 'Paramètre "dateDebut": ' . $dateDebut . '<br>' : 'Le paramètre "dateDebut" n\'est pas défini<br>';
           echo isset($_GET["dateFin"]) ? 'Paramètre "dateFin": ' . $dateFin . '<br>' : 'Le paramètre "dateFin" n\'est pas défini<br>';
           echo isset($_GET["langage"]) ? 'Paramètre "langage": ' . $langage . '<br>' : 'Le paramètre "langage" n\'est pas défini<br>';
           echo isset($_GET["serveur"]) ? 'Paramètre "serveur": ' . $serveur . '<br>' : 'Le paramètre "serveur" n\'est pas défini<br>';
           echo isset($_GET["semaine"]) ? 'Paramètre "semaine": ' . $semaine . '<br>' : 'Le paramètre "semaine" n\'est pas défini<br>';
           echo isset($_GET["batiment"]) ? 'Paramètre "batiment": ' . $batiment . '<br>' : 'Le paramètre "batiment" n\'est pas défini<br>';
           echo isset($_GET["salle"]) ? 'Paramètre "salle": ' . $salle . '<br>' : 'Le paramètre "salle" n\'est pas défini<br>';
        ?>
    
    <!-- <?= 'Paramètre "nom": ' . $nom . '<br>Paramètre "prenom: "' . $prenom; ?> -->
            
    </div>
    <hr>
    

</body>
</html>