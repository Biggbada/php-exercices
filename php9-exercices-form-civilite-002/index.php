<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Formulaires en PHP</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="p-4 bg-light">
  <h1>Formulaires en PHP</h1>
  <hr>
  <h2>Formulaire en méthode POST</h2>

  <?php
  function checkPdf($file)
  {
    if (isset($file)) {
      $fileInfo = new SplFileInfo($file);
      $fileExtension = $fileInfo->getExtension();
      return $fileExtension;
    }
  }
  if (
    (isset($_POST['prenom'])) &&
    ($_POST['prenom'] !== '') &&
    (isset($_POST['nom'])) &&
    ($_POST['nom'] !== '') &&
    (checkPdf($_POST['fichier']) === 'pdf')
  ) {

    echo '<div class="alert alert-info w-25">
         
             
             Civilité: ' . $_POST['civilite'] .  '<br>Prénom: ' . $_POST['prenom'] . '<br>Nom: ' . $_POST['nom'] .  '<br>Nom du fichier: ' . $_POST['fichier'] . '</div>';
  } else {
    echo '<form action="./index.php" method="post">
  <div class="col-md-3 mb-3">
    <label for="civilite" class="form-label">Civilité</label>
    <br>
    <select name="civilite" id="civilite">
      <option value="H">Mr</option>
      <option value="F">Mme</option>
    </select>
  </div>
  <div class="col-md-3 mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" name="prenom" class="form-control" id="prenom" "^(?!\s*$).+">
  </div>
  <div class="col-md-3 mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>
  <div class="col-md-3 mb-3">
  <input type="file" name="fichier" id="fichier">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';
  }
  ?>
</body>

</html>