<?php
require_once __DIR__ . '/vendor/autoload.php';

$servName = "localhost";
$dbName = "colyseum";
$dbUser = 'root';
$dbPass = '';

$customLastName = $_POST['lastname'] ?? '';
$customFirstName = $_POST['firstname'] ?? '';
$customBirthDate = $_POST['birthdate'] ?? '';
$customGotCard = $_POST['card'] ?? 0;
$customCardNumber = $_POST['cardnumber'] ?? null;
$customCardType = $_POST['cardtype'] ?? null;

$dbco = new PDO("mysql:host=$servName;dbname=$dbName", $dbUser, $dbPass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $dbco->prepare("INSERT INTO clients(lastName, firstName, birthDate, `card`,  cardNumber) VALUES (:customLastName, :customFirstName, :customBirthDate, :customGotCard, :customCardNumber)");
$sth->bindParam(':customLastName', $customLastName);
$sth->bindParam(':customFirstName', $customFirstName);
$sth->bindParam(':customBirthDate', $customBirthDate);
$sth->bindParam(':customGotCard', $customGotCard);
$sth->bindParam(':customCardNumber', $customCardNumber);
$secondPdo = $dbco->prepare("INSERT INTO cards(cardNumber, cardTypesId) VALUES (:customCardNumber, :customCardType)");
$secondPdo->bindParam(':customCardNumber', $customCardNumber);
$secondPdo->bindParam(':customCardType', $customCardType);


try {
  echo ((isset($_POST['lastname'])) && (isset($_POST['firstname'])) && (isset($_POST['birthdate'])));
  if ((isset($_POST['lastname'])) && (isset($_POST['firstname'])) && (isset($_POST['birthdate']))) {
    $sth->execute();
    $names = $sth->fetchAll(PDO::FETCH_ASSOC);
  }
} catch (PDOException $e) {
  echo "Erreur 1er PDO: " . $e->getMessage();
  dump($customCardNumber);
}
try {
  if ((isset($_POST['cardnumber'])) && (isset($_POST['cardtype']))) {
    $secondPdo->execute();
    $cards = $sth->fetchAll(PDO::FETCH_ASSOC);
  }
} catch (PDOException $e) {
  echo "Erreur 2eme PDO: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Requêtes SQL - 2</title>
  <script src="index.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="p-4 bg-light">
  <h1>Requêtes SQL - Partie 2</h1>
  <hr>
  <h2>Exercice 1</h2>
  <!-- <form action="index.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-8 col-sm-2">
          <label for="lastname">Nom</label>
          <input class="required-input border border-1" type="text" name="lastname" id="lastname" placeholder="Nom">
        </div>
        <div class="col-8 col-sm-2">
          <label for="firstname">Prénom</label>
          <input class="required-input border border-1" type="text" name="firstname" id="firstname" placeholder="Prénom">
        </div>
        <div class="row mt-3">
          <div class="col-8 col-sm-2">
            <label for="birthdate">Date de naissance</label>
            <input class="required-input border border-1" type="date" name="birthdate" id="birthdate" placeholder="Date de naissance">
          </div>
          <div class="row mt-3">
            <div class="col-8 col-sm-2">
              <label for="card">Carte de fidélité</label>
              <input class="required-input border border-1" type="checkbox" value="1" name="card" id="card">
            </div>
            <div class="row mt-3">
              <div class="col-8 col-sm-2">
                <label for="cardnumber">Numéro de carte</label>
                <input class="border border-1 form-control-plaintext" type="number" name="cardnumber" id="cardnumber" value="Disabled readonly input" disabled>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-8 col-sm-2">
                <input id="submit-btn" type="submit" value="Envoyer">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
    </div>

  </form> -->
  <h2>Exercicce 2</h2>
  <form action="index.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-8 col-sm-2">
          <label for="lastname">Nom</label>
          <input class="required-input border border-1" type="text" name="lastname" id="lastname" placeholder="Nom">
        </div>
        <div class="col-8 col-sm-2">
          <label for="firstname">Prénom</label>
          <input class="required-input border border-1" type="text" name="firstname" id="firstname" placeholder="Prénom">
        </div>
        <div class="row mt-3">
          <div class="col-8 col-sm-2">
            <label for="birthdate">Date de naissance</label>
            <input class="required-input border border-1" type="date" name="birthdate" id="birthdate" placeholder="Date de naissance">
          </div>
          <div class="row">
            <div class="col-8 col-sm-2">
              <label for="card">Carte de fidélité</label>
              <input class="required-input border border-1" type="checkbox" value="1" name="card" id="card">
            </div>
            <div class="col-8 sm-2">
              <label for="cardtype">Type de carte</label>
              <select name="cardtype" id="cardtype">
                <option>Choisir</option>
                <option value="1">Fidélité</option>
                <option value="2">Famille nombreuse</option>
                <option value="3">Étudiant</option>
                <option value="4">Employé</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-8 col-sm-2">
              <label for="cardnumber">Numéro de carte</label>
              <input class="border border-1 form-control-plaintext" type="number" name="cardnumber" id="cardnumber" value="Disabled readonly input" disabled>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-8 col-sm-2">
              <input id="submit-btn" type="submit" value="Envoyer">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div>
    </div>

  </form>

</body>

</html>