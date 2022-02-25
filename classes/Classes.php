<?php
//creo nuova classe php
class Film {
    //creo variabili private
    private $poster;
    private $title;
    private $author;
    private $director;
    public $releaseDate;
    //creo i metodi che ci permetteranno di utilizzare queste variabili dentro index.php
    //il primo metodo sarà un costruttore, che renderà obbligatoria la dichiarazione di attributi da valorizzare. Il costruttore deve essere una function public
    public function __construct($_poster, $_title, $_author, $_director){
        $this->poster = $_poster;
        $this->title = $_title;
        $this->author = $_author;
        $this->director = $_director;
    }
    //adesso creo un metodo che mi permetterà di utilizzare i dati contenuti nelle varibili all'interno di index.php
    public function getFilm(){
        return '{$this->poster}{$this->title}{$this->author}{$this->director}{$this->releaseDate}';
    }

}



