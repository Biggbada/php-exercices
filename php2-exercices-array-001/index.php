<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    echo $mois[2] . '<br>';
    echo $mois[5] . '<br>';
    $mois[7] = 'Août';
    echo $mois[7] . '<br>';

    $dpts = [02 => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme"];
    echo $dpts[59] . '<br>';
    $dpts[51] = 'Marne';
    echo $dpts[51] . '<br>';
    foreach($mois as $m) {
        echo $m . '<br>';
    };

    foreach ($dpts as $dpt) {
        echo $dpt . '<br>';
    };

    foreach ($dpts as $k => $dpt) {
        echo 'Le département '. $dpt . ' a le numéro ' . $k . ',' . '<br>';
        }


?>
</body>
</html>