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
        'Avengers: Age of Ultron'
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
                    echo "<li>{$element->getFilm()}</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>


