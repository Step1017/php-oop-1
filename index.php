<?php
// Definizione della classe Movie
class Movie {
    // Dichiarazione variabili d'istanza
    private $title;
    private $director;
    private $year; 

    // Costruttore della classe
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Metodi setter e getter per ciascuna variabile
    public function setMovieTitle($title) {
        if (isset($title)) {
            $this->title = $title;
        }
        else {
            echo 'Error';
        }
    }

    public function getMovieTitle () {
        return $this->title;
    }

    public function setMovieDirector ($director) {
        if (is_string($director) && strlen($director) > 3) {
            $this->director = $director;
        }
        else {
            echo 'Error';
        }
    }

    public function getMovieDirector() {
        return $this->director;
    }

    public function setMovieYear($year) {
        if (is_numeric($year) && strlen($year) == 4) {
            $this->$year = $year;
        }
        else {
            echo 'Error';
        }
    }

    public function getMovieYear() {
        return $this->year;
    }
}

// Istanziazione degli oggetti Movie
$movie1 = new Movie("Iron Man", "Jon Favreau", "2008");
$movie1 = new Movie("Thor", "Kenneth Branagh", "2011");
$movie1 = new Movie("Captain America: The First Avenger", "Joe Johnston", "2011");
$movie1 = new Movie("Marvel's The Avengers", "Joss Whedon", "2012");
$movie1 = new Movie("Guardiani della Galassia", "James Gunn", "2014");
$movie1 = new Movie("Avengers: Age of Ultron", "Joss Whedon", "2015");
$movie1 = new Movie("Ant-Man", "Peyton Reed", "2015");
$movie1 = new Movie("Doctor Strange", "Scott Derrickson", "2016");
$movie1 = new Movie("Spider-Man: Homecoming", "Jon Watts", "2017");
$movie1 = new Movie("Black Panther", "Ryan Coogler", "2018");
$movie1 = new Movie("Avengers: Infinity War", "Anthony Russo & Joe Russo", "2018");
$movie1 = new Movie("Captain Marvel", "Anna Boden; Ryan Fleck", "2019");
$movie1 = new Movie("Avengers: Endgame", "Anthony Russo & Joe Russo", "2019");
$movie1 = new Movie("Black Widow", "Cate Shortland", "2021");
$movie1 = new Movie("Black Widow", "Cate Shortland", "2021");
$movie1 = new Movie("Shang-Chi e la Leggenda dei Dieci Anelli", "Destin Daniel Cretton", "2021");
$movie1 = new Movie("Black Widow", "Cate Shortland", "2021");
$movie1 = new Movie("Eternals", "Chloé Zhao", "2021");
$movie1 = new Movie("Black Widow", "Cate Shortland", "2021");
?>