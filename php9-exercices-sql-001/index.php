<?php
require_once __DIR__ . '/vendor/autoload.php';

$servName = "localhost";
$dbName = "colyseum";
$dbUser = 'root';
$dbPass = '';

$dbco = new PDO("mysql:host=$servName;dbname=$dbName", $dbUser, $dbPass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $dbco->prepare("SELECT lastName, firstName FROM clients");
$sth->execute();
$names = $sth->fetchAll(PDO::FETCH_ASSOC);
// dump($names);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Requêtes SQL</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="p-4 bg-light">
  <h1>Requêtes SQL</h1>
  <hr>
  <h2>Afficher tous les clients</h2>

  <table class="table table-sm table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
      </tr>
    </thead>
    <?php foreach ($names as $k => $user) {
      // print_r($k);
      echo '<tr><td>' . $user['firstName'] . '</td><td>' . $user['lastName'] . '</td></tr>';
    };
    ?>
  </table>
  <hr>
  <h2>Afficher tous les types de spectacles possibles</h2>


  <table class="table table-sm table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Show type</th>
      </tr>
    </thead>

    <?php
    $sth = $dbco->prepare("SELECT type FROM showtypes");
    $sth->execute();
    $names = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($names as $name) {
      echo '<tr><td>' . $name['type'] . '</td></tr>';
    };
    ?>
  </table>

  <hr>
  <h2>Afficher les 20 premiers clients</h2>
  <table class="table table-sm table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
      </tr>
    </thead>
    <?php
    $sth = $dbco->prepare("SELECT lastName, firstName FROM clients LIMIT 20");
    $sth->execute();
    $customers = $sth->fetchAll(PDO::FETCH_ASSOC);
    $index = 1;
    foreach ($customers as $k => $customers) {
      echo '<tr><td>' . $index . '<td>' . $customers['firstName'] . '</td><td>' . $customers['lastName'] . '</td></tr>';
      $index++;
    };
    ?>
  </table>

  <h2>N'afficher que les clients possédant une carte de fidélité</h2>
  <?php
  $sth = $dbco->prepare("SELECT lastName, firstName FROM clients WHERE card=1");
  $sth->execute();
  $names = $sth->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <table class="table table-sm table-striped table-bordered table-hover table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
      </tr>
    </thead>
    <?php foreach ($names as $k => $user) {
      // print_r($k);
      echo '<tr><td>' . $user['firstName'] . '</td><td>' . $user['lastName'] . '</td></tr>';
    };
    ?>
  </table>
  <hr>

  <h2>N'afficher uniquement le nom et le prénom de tous les clients dont le nom
    commence par la lettre "M"</h2>
  <p class="lead">Les afficher comme ceci :<br>
    Nom : *Nom du client*<br>
    Prénom : *Prénom du client*<br>
    Trier les noms par ordre alphabétique.</p>
  <hr>
  <?php
  $sth = $dbco->prepare("SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC");
  $sth->execute();
  $names = $sth->fetchAll(PDO::FETCH_ASSOC);

  foreach ($names as $k => $user) {
    // print_r($k);
    echo '<p>Nom du client: ' . $user['lastName'] . '<br>Prénom du client: ' . $user['firstName'] . '</p>';
  };
  ?>
  <hr>
  <h2>Exercice 6</h2>
  <p class="lead">
    Afficher le titre de tous les spectacles ainsi que l'artiste, la date et
    l'heure. <br>Trier les titres par ordre alphabétique.<br>Afficher les résultat comme
    ceci : <br>*Spectacle* par *artiste*, le *date* à *heure*.
  </p>
  <hr>
  <?php
  $sth = $dbco->prepare("SELECT * FROM shows ORDER BY title");
  $sth->execute();
  $shows = $sth->fetchAll(PDO::FETCH_ASSOC);
  foreach ($shows as $k => $show) {
    echo '<p>Spectacle ' . $show['title'] . ' par ' . $show['performer'] . ' le ' . $show['date'] . ' à ' . $show['startTime'] . '.</p>';
  };
  ?>
  <hr>
  <h2>Exercice 7</h2>
  <p class="lead">
    Afficher tous les clients comme ceci :<br>
    Nom : *Nom de famille du client*<br>
    Prénom : *Prénom du client*<br>
    Date de naissance : *Date de naissance du client*<br>
    Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en
    possède pas)*<br>
    Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*
  </p>
  <hr>
  <p>
    <?php
    $sth = $dbco->prepare("SELECT * FROM clients");
    $sth->execute();
    $clients = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clients as $k => $client) {
      echo 'Nom: ' . $client['lastName'] . '<br>Prénom: ' . $client['firstName'] . '<br>Date de naissance: ' . $client['birthDate'] . '<br>';
      if ($client['card'] === 1) {
        echo 'Carte de fidélité: oui<br>Numéro de carte: ' . $client['cardNumber'] . '<br><br>';
      } else {
        echo '<br>';
      }
    };
    ?>
  </p>
  <hr>
</body>

</html>