<!-- Create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà --> 
<?php
//icludo file della classe
require_once __DIR__.'/classes/Film.php';
//creo array in cui creo nuovi oggetti appartenenti alla classe inclusa
 $filmLibrary = [
     new Film (
         'The Avengers',
         'Joss Whedon',
         'Joss Whedon'
     ),
     new Film (
         'Avengers: Age of Ultron',
         'Joss Whedon',
         'Joss Whedon'
     ),
     new Film (
         'Avengers: Infinity War',
         'Christopher Markus e Stephen McFeely',
         'Anthony e Joe Russo'
     ),
     new Film (
         'The Avengers: Endgame',
         'Christopher Markus e Stephen McFeely',
         'Anthony e Joe Russo'
     )
];
$filmLibrary[0]->poster = 'https://m.media-amazon.com/images/I/61rv+Rnsu6L._AC_.jpg';
$filmLibrary[1]->poster = 'https://www.lospaziobianco.it/wp-content/uploads/2015/02/avengers-poster-ae636.jpg';
$filmLibrary[2]->poster = 'https://m.media-amazon.com/images/I/71xu1PT1dwL._AC_SY606_.jpg';
$filmLibrary[3]->poster = 'https://m.media-amazon.com/images/I/81orCFVm9iL._AC_SL1500_.jpg';
// var_dump($filmLibrary);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista Film</title>
</head>
<body>
        <ul>
            <?php 
                foreach($filmLibrary as $movie){
                    echo "<li>{$movie->getFilm()}</li>
                    <img class='posterimg' src='{$movie->poster}'>
                    ";
                }
            ?>
        </ul>

</body>
</html>


