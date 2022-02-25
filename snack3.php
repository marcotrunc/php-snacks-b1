<?php
/* Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.*/

$random_numbers = [];
$len_array = 15;


while (count($random_numbers) != $len_array) {
    $random_number = rand(0, 100);
    if (!in_array($random_number, $random_numbers)) {
        $random_numbers[] = $random_number;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Esercizio 3</h2>
    <p>
        <strong>Traccia: </strong>
        <span>
            Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
        </span>
    </p>
    <h3>I numeri presenti nell'array sono:</h3>
    <ul>
        <?php for ($i = 0; $i < count($random_numbers); $i++) { ?>
            <li><?php echo $random_numbers[$i] ?></li>
        <?php } ?>
    </ul>
</body>

</html>