<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        function makeTrue() : bool {
            return true;
        }
        ?>
    </p>
    <p>
        <?php
        function returnString(string $texte) : string {
            return $texte;
        }
        ?>
    </p>
    <p>
        <?php
        function returnConcatStrings(string $texte1, string $texte2) : string {
            return $texte1.$texte2;
        }
        ?>
    </p>
    <p>
        <?php
        function compareNumbers(float $numb1, float $numb2) : string {
            if ($numb1 > $numb2) {
                return 'Le premier nombre est plus grand';
            } 
            elseif ($numb1 < $numb2) {
                return 'Le premier nombre est plus petit';
            }
            else {
                return 'Les deux nombres sont identiques';
            }
        }
        ?>
    </p>
    <p>
        <?php
        function concatNumberWithString(float $numb, string $text) : string {
            return $numb.$text;
        }
        ?>
    </p>
    <p>
        <?php
        function concatIdentity(string $nom, string $prenom, int $age) : string {
            return 'Bonjour ' . $nom . ' ' . $prenom . ' tu as ' . $age . ' ans.';
        }
        ?>
    </p>
    <p>
        <?php
        function whoAreYou(int $age, string $genre) : string {
            if ($genre !== 'homme' && $genre !== 'femme') {
                throw new Exception(message: 'Le genre doit être "homme" ou "femme');
            } else {
            return 'Vous êtes un ' . $genre . ' et vous êtes ' . ($age >=18 ? 'majeur' : 'mineur');
        }
    }
        ?>
    </p>
    <p>
        <?php
        function sommeDeTroisNombres(float $nb1 = 1, float $nb2 = 2.8, float $nb3 = 4, ) : float {
            return $nb1 + $nb2 + $nb3;
        }
        ?>
    </p>
    
</body>
</html>