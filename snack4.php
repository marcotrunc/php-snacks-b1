<?php
/*Prendere un paragrafo abbastanza lungo,
 contenente diverse frasi.
  Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
*/


//   Paragrafo
$paragraph = "Nell’ultima seduta i mercati finanziari hanno dato non una, ma ben due lezioni a quella sterminata platea di investitori e trader che li popolano. La prima è che non bisogna mai darli per scontati. I mercati sono, come dire, una sorta di intelligenza collettiva che ogni istante prova a mettere nei prezzi delle classi di investimento tutte le informazioni disponibili (macro, micro, monetarie, geopolitiche e via discorrendo). La complessità di questa elaborazione, condita poi dalle emozioni umane";

//  Metodo per creare un nuovo array ad ogni punto
$newArray = explode(".", $paragraph);


//    Array di destionazione 
$paragraphs = [];


// Pushare in un nuovo array
for ($i = 0; $i < count($newArray); $i++) {
    $paragraphs['paragraph_' . $i] = $newArray[$i];
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
    <h2>Esercizio 4</h2>
    <p>
        <strong>Traccia:</strong>
        <span>
            Prendere un paragrafo abbastanza lungo,
            contenente diverse frasi.
            Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
        </span>
    </p>
    <h4>Inizialmente il paragrafo è:</h4>

    <?php echo "<p>$paragraph </p>" ?>


    <h4>Il nuovo paragrafo è:</h4>
    <ul>
        <?php for ($i = 0; $i < count($paragraphs); $i++) { ?>
            <li><?php echo $paragraphs['paragraph_' . $i] ?></li>
        <?php } ?>
    </ul>
</body>

</html>