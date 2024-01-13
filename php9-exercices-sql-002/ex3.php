<?php
require_once __DIR__ . '/vendor/autoload.php';

$servName = "localhost";
$dbName = "colyseum";
$dbUser = 'root';
$dbPass = '';

$dbco = new PDO("mysql:host=$servName;dbname=$dbName", $dbUser, $dbPass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sqlQuery = "SELECT * FROM genres order by genre ASC";
$genres = $dbco->query($sqlQuery)->fetchAll(PDO::FETCH_NAMED);
$sqlShowTypesQuery = "SELECT * FROM showTypes";
$showTypes = $dbco->query($sqlShowTypesQuery)->fetchAll(PDO::FETCH_NAMED);


// $customLastName = $_POST['lastname'] ?? '';
// $customFirstName = $_POST['firstname'] ?? '';
// $customBirthDate = $_POST['birthdate'] ?? '';
// $customGotCard = $_POST['card'] ?? 0;
// $customCardNumber = $_POST['cardnumber'] ?? null;
// $customCardType = $_POST['cardtype'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'] ?? '';
  $performer = $_POST['performer'] ?? '';
  $date = $_POST['date'] ?? '';
  $showTypesId = $_POST['showtypesid'] ?? '';
  $firstGenresId = $_POST['firstgenresid'] ?? '';
  $secondGenresId = $_POST['secondgenresid'] ?? '';
  $duration = $_POST['duration'] ?? '';
  $startTime = $_POST['starttime'] ?? '';




  try {
    if ($title != "" && $performer != "") {
      $sth = $dbco->prepare("INSERT INTO shows (title, performer, `date`, showTypesid, firstGenresId, secondGenreId, duration, startTime) VALUES (:title, :performer, :'date, :showtypesid, :firstgenresid, :secondgenresid, :duration, :starttime)");
      $sth->bindParam('title', $title);
      $sth->bindParam('performer', $performer);
      $sth->bindParam('date', $date);
      $sth->bindParam('showtypesid', $showTypesId);
      $sth->bindParam('firstgenresid', $firstGenresId);
      $sth->bindParam('secondgenresid', $secondGenresId);
      $sth->bindParam('duration', $duration);
      $sth->bindParam('starttime', $startTime);
      $sth->execute();
      $datas = $sth->fetchAll(PDO::FETCH_ASSOC);
      dump($datas);
    }
  } catch (PDOException $e) {
    echo "Erreur 1er PDO: " . $e->getMessage();
    dump($e);
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Requêtes SQL - 2</title>
  <!-- <script src="index.js" defer></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="p-4 bg-light">

  <h1>Requêtes SQL - Partie 2</h1>
  <hr>
  <form action="ex3.php" method="post">
    <div class="container-xl">
      <div class="row">
        <label for="title">Nom du spectacle</label>
        <input type="text" name="title" id="title">
      </div>
      <div class="row">
        <label for="performer">Artiste</label>
        <input type="text" name="performer" id="performer">
      </div>
      <div class="row">
        <label for="date">Date du spectacle</label>
        <input type="date" name="date" id="date">
      </div>
      <div class="row">
        <!-- <?php
              $showTypesQuery = "SELECT `type` FROM showtypes";
              $showTypesList = $dbco->query($showTypesQuery);
              foreach ($showTypesList as $key => $value) {
                echo $key;
              }
              ?> -->
        <label for="showtypesid">Type de spectacle</label>
        <select name="showtypesid" id="showtypesid">
          <?php
          foreach ($showTypes as $key => $types) {
            dump($key);
            dump($types);
            echo '<option value="' . $types["id"] . '">' . $types["type"] . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="row container-fluid">
        <div class=" container">
          <label for="firstgenresid">Style de musique 1</label>
          <br>


          <select name="firstgenresid" id="firstgenresid">
            <?php
            foreach ($genres as $genre) {
              echo '<option value="' . $genre["id"] . '">' . $genre["genre"] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="container">
          <label for="secondgenresid">Style de musique 2</label>
          <br>
          <select name="secondgenresid" id="secondgenresid">
            <?php
            foreach ($genres as $genre) {
              echo '<option value="' . $genre["id"] . '">' . $genre["genre"] . '</option>';
            }
            ?>
          </select>
        </div>

      </div>
      <div class="row">
        <div>
          <label for="duration">Durée</label>
          <br>
          <input type="time" name="duration" id="duration">
        </div>
        <div>
          <label for="starttime">Heure de départ</label>
          <br>
          <input type="time" name="starttime" id="starttime">
        </div>

      </div>
      <div class="row mt-3">
        <input type="submit" value="Envoyer">
      </div>
    </div>




  </form>
  <!-- <h2>Exercicce 2</h2>
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

  </form> -->

</body>

</html>