<?php
/* Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e 
una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];

$is_valid = false;

$is_len = false;
$is_contained = false;
$is_number = false;

$message = "Accesso negato";

// Prima validazione
if (strlen($name) > 3) $is_len = true;

// Seconda validazione
if (strpos($email, '.') && strpos($email, '@')) {
    $is_contained = true;
};


// Terza validazione 
if (is_numeric($age)) $is_number = true;

// VAlidazione generale
if (($is_len) && ($is_contained) && ($is_number)) {
    $is_valid = true;
    $message = "Accesso Riuscito";
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
    <section>
        <h2>Primo Esercizio</h2>
        <p>
            <strong>Traccia: </strong>
            <span>
                Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto
                e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
                altrimenti “Accesso negato”
            </span>
            <?php echo "<h4>$message</h4>" ?>
        </p>
    </section>
</body>

</html>