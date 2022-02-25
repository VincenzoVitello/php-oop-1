<!-- Create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
//icludo file della classe
require_once __DIR__.'/classes/Classes.php';
//creo array in cui creo nuovi oggetti appartenenti alla classe inclusa
$filmLibrary = [
    new Film [
        'https://m.media-amazon.com/images/I/61rv+Rnsu6L._AC_.jpg',
        'The Avengers',
        'Joss Whedon',
        'Joss Whedon',
        'releaseDate' => '25 aprile 2012'
    ],
    new Film [
        'https://www.lospaziobianco.it/wp-content/uploads/2015/02/avengers-poster-ae636.jpg',
        'Avengers: Age of Ultron'
        'Joss Whedon',
        'Joss Whedon',
        'releaseDate' => '22 aprile 2015'
    ],
    new Film [
        'https://m.media-amazon.com/images/I/71xu1PT1dwL._AC_SY606_.jpg',
        'Avengers: Infinity War',
        'Christopher Markus e Stephen McFeely',
        'Anthony e Joe Russo',
        'releaseDate' => '25 aprile 2018'
    ],
    new Film [
        'https://pad.mymovies.it/filmclub/2018/12/029/locandina.jpg',
        'The Avengers: Endgame',
        'Christopher Markus e Stephen McFeely',
        'Anthony e Joe Russo',
        'releaseDate' => '24 aprile 2019'
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
</head>
<body>
    <div class="container">
        <ul>
            <?php 
                foreach($filmLibrary as $element){
                    echo '<li>{element->getFilm()}</li>';
                }
            ?>
        </ul>
    </div>
</body>
</html>


