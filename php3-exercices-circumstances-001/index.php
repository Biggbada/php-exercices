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
    $age = 18;
    if($age >= 18) {
        echo 'Vous êtes majeur';
    } else {
        echo 'Vous êtes mineur';
    };

    echo '<br>';

    $isEasy = true;
if($isEasy) {
    echo "C'est facile";
} else {
    echo "C'est difficile";
}

echo '<br>';
echo $isEasy ? "C'est facile" : "C'est difficile";
echo '<br>';
$age = 12;
$genre = 'Femme';

echo 'Vous êtes ' . ($genre === 'Homme' ? 'un homme et vous êtes' : 'une femme et vous êtes') . ($age >= 18 ? ' majeur' : ' mineur');
echo '<br>';

$magnitude = 3;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable
        par les sismomètres";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être
        légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne
        causant généralement pas de dégats";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur
        de vieux bâtiments ou bien des bâtiments présentants des défauts de
        construction. Peu de dégats sur des bâtiments modernes";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions
        majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur
        une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très
        large zone de plusieurs centaines de kilomètres";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste
        zone";
        break;
}
echo '<br>';

$maVariable = 'Femme';

if($maVariable != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}
echo '<br>';

$monAge = 28;
if ($monAge >=18) {
    echo 'Tu es majeur';
} else {
    echo 'Tu n\'es pas majeur';
}

echo '<br>';

$maVariable = true;

if ($maVariable === false) {
    echo "Ce n'est pas bon";
} else {
    echo "C'est ok";
}

echo '<br>';

if ($maVariable) {
    echo "C'est ok";
} else {
    echo "Ce n'est pas bon";
}
?>
</body>
</html>