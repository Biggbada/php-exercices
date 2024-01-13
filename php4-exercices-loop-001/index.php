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
    
    $maVariable = 0;

    while ($maVariable < 10) {
        echo $maVariable;
        $maVariable++;
    }

?>
</p>
    <p>
        <?php

    $variable1 = 0;
    $variable2 = 54;
    while ($variable1 < 20) {
        $result = $variable1 * $variable2;
        echo $result . '<br>';
        $variable1++;
    }
    ?>
    </p>
    <p>
        <?php

    $variable1 = 100;
    $variable2 = 52;
    while ($variable1 >= 10) {
        $result = $variable1 * $variable2;
        echo $result . '<br>';
        $variable1--;
    }
    ?>
    </p>
    <p>
        <?php
        $variable = 1;
        while ($variable <= 10) {
            echo $variable . '<br>';
            $variable += ($variable / 2);
        }
        ?>
    </p>
    <p>
        <?php
    for ($i = 1 ; $i <= 15; $i++) {
        echo 'On y arrive presque' . '<br>';
    }

    ?>
    <p>
        <?php
        for ($i = 20; $i >= 0; $i--) {
            echo "C'est presque bon" . '<br>';
        }
        ?>
    </p>
    
    <p>
        <?php
        for ($i = 1; $i <= 100; $i += 15) {
            echo 'On tient le bon bout' . '<br>';
        }

        ?>
    </p>
    <p>
        <?php
        for ($i = 200; $i >= 0; $i -= 12) {
            echo 'Enfin !' . '<br>';
        }

        ?>
    </p>
    
</body>
</html>