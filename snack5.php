<?php
/*Utilizzare questo array: https://pastebin.com/CkX3680A.
 Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers =  $db['teachers'];
$pm = $db['pm'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-green {
            background-color: aqua;
        }

        .bg-grey {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <section>
        <!-- Traccia -->
        <h2>Esercizio 5</h2>
        <p>
            <strong>Traccia:</strong>
            <span>
                Dato un array noto,
                stampiamolo mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
            </span>
        </p>

        <!-- Esecuzione -->
        <h4>Teachers:</h4>
        <div class="bg-grey">
            <ul>
                <?php for ($i = 0; $i < count($teachers); $i++) { ?>
                    <li>
                        <span><?= $teachers[$i]['name'] ?></span>
                        <span><?= $teachers[$i]['lastname'] ?></span>
                    </li>
                <?php } ?>
            </ul>
        </div>


        <h4>Pm:</h4>
        <div class="bg-green">
            <ul>
                <?php for ($i = 0; $i < count($pm); $i++) { ?>
                    <li>
                        <span><?= $pm[$i]['name'] ?></span>
                        <span><?= $pm[$i]['lastname'] ?></span>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>


</body>

</html>