<?php
// echo 'Hello world';

/* CREAZIONE CLASSE */
class Movie{
    // DATI PRINCIPALI
    public $name;
    public $year;
    public $runningTime;
    private $actors;
    public static $startingPrice;


    function __construct($_name, $_year, $_actors = []){
        
    }

}

echo '($name, $year, $runningTime)';



?>