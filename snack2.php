<?php
/* Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.*/
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// Array di
$keys_array = array_keys($posts);

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
    <!-- Traccia -->
    <h2>Esercizio 2</h2>
    <p>
        <strong>Traccia:</strong>
        <span>
            Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
            DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
            Stampare ogni data con i relativi post.
        </span>
    </p>
    <!-- Esecuzione -->
    <?php for ($i = 0; $i < count($keys_array); $i++) { ?>
        <h4><?= $keys_array[$i] ?></h4>
        <ul>
            <?php for ($j = 0; $j < count($posts[$keys_array[$i]]); $j++) { ?>
                <?php $list = $posts[$keys_array[$i]][$j] ?>
                <li>
                    <strong><?= $list['title'] ?></strong> <br>
                    <strong>Author:</strong> <span><?= $list['author'] ?> </span> <br>
                    <strong>Text:</strong> <span><?= $list['text'] ?> </span>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>

</html>