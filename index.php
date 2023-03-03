<?php
// Definizione della classe Movie
class Movie {
    // Dichiarazione variabili d'istanza
    public $title;
    public $director;
    public $year; 

    // Costruttore della classe
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Metodi
    public function getMovieTitle() {
        return "Title" . $this->title;
    }

    public function getMovieDirector() {
        return "Director" . $this->director;
    }

    public function getMovieYear() {
        return "Year" . $this->year;
    }
}

?>