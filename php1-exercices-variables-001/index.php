<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Les variables</h1>
    <ol>
        <li>
            <p>Créer une variable **nom** et l'initialiser avec la valeur de votre choix.
Afficher son contenu.</p>
<pre>
    <code>$nom = 'Yann'</code>
</pre>
<?= 'Résultat: <br>' . $nom = 'Yann' ?>
        </li>
        <li>
            <p>Créer trois variables **nom** , **prenom** et **age** et les initialiser
avec les valeurs de votre choix. **Attention** age est de type entier.
Afficher leur contenu.</p>
<pre>
    <code>
        $nom = 'Guenot';
        $prenom = 'Yann';
        $age = 43;
        echo $nom . ' ' . $prenom . ' ' . $age;
    </code>
</pre>
<?php
$nom = 'Guenot';
        $prenom = 'Yann';
        $age = 43;
        echo 'Résultat: <br>' . $nom . ' ' . $prenom . ' ' . $age ;
?>
        </li>
        <li>
            <p>Créer une variable **km**. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu.</p>
<pre>
    <code>
        $km = 1;
        echo $km;
        $km = 3;
        echo $km;
        $km = 125;
        echo $km;
    </code>
</pre>
<?php echo 'Résultat: <br>';
    $km = 1;
    echo $km . '<br>';
    $km = 3;
    echo $km . '<br>';
    $km = 125;
    echo $km;
?>
        </li>
        <li>
            <p>Créer une variable de type string, une variable de type int, une variable
de type float, une variable de type booléan et les initialiser avec une
valeur de votre choix. Les afficher.</p>
<pre>
    <code>
        $entier = 1;
        $nombreVirgule = 1.2;
        $booleen = true;
        echo 
        'int: ' . $entier .
        'float: ' . $nombreVirgule .
        'boolean: ' . $booleen
    </code>
</pre>
<?php echo 'Résultat: <br>';
    $entier = 1;
    $nombreVirgule = 1.2;
    $booleen = true;
    echo 
    'int: ' . $entier . '<br>' . 'float: ' . $nombreVirgule . '<br>' . 'boolean: ' . $booleen
?>
        </li>
        <li>
            <p>Créer une variable de type int. L'initialiser avec **rien**. Afficher sa
valeur. Donner une valeur à cette variable et l'afficher.</p>
<pre>
    <code>
        $entier = null;
        echo $entier; //ne retourne rien
        var_dump($entier);
        $entier = 2;
        echo $entier;
    </code>
</pre>
<?php echo 'Résultat: <br>';
$entier = null;
echo $entier . '<br>';
var_dump($entier);
$entier = 2;
echo '<br>' . $entier;
?>
        </li>
        <li>
            <p>Créer une variable **nom** et l'initialiser avec la valeur de votre choix.
Afficher : "Bonjour" + **nom** + "comment vas tu ?".</p>
<pre>
    <code>
        $nom = 'John';
        echo 'Bonjour ' . $nom . ' comment vas-tu ?';
    </code>
</pre>
<?php echo 'Résultat: <br>';
$nom = 'John';
echo 'Bonjour ' . $nom . ' comment vas-tu ?';
?>
        </li>
        <li>
            <p>Créer trois variables **nom** , **prenom** et **age** et les initialiser
avec les valeurs de votre choix. **Attention** age est de type entier.
Afficher : "Bonjour" + **nom** + **prenom** + "tu as" + **age** + "ans".</p>
<pre>
    <code>
        $nom = 'Doe';
        $prenom = 'John';
        $age = 28;
        echo 'Bonjour ' . $prenom . ' ' . $nom . ' tu as ' . $age . ' ans.';
    </code>
</pre>
<?php echo 'Résultat: <br>';
$nom = 'Doe';
$prenom = 'John';
$age = 28;
echo 'Bonjour ' . $prenom . ' ' . $nom . ' tu as ' . $age . ' ans.';
?>
        </li>
        <li>
            <p>Créer 3 variables.
Dans la première mettre le résultat de l'opération **3 + 4**.
Dans la deuxième mettre le résultat de l'opération **5 * 20**.
Dans la troisième mettre le résultat de l'opération **45 / 5**.
Afficher le contenu des variables.
3</p>
<pre>
    <code>
        $somme = 3 + 4;
        $multiplication = 5 * 20;
        $division = 45 / 5;
        echo $somme . $multiplication . $division
    </code>
</pre>
<?php echo 'Résultat: <br>';
$somme = 3 + 4;
$multiplication = 5 * 20;
$division = 45 / 5;
echo $somme . '<br>' . $multiplication . '<br>' . $division
?>
        </li>
    
    
    </ol>
</body>
</html>