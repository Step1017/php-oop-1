<?php
// Definizione della classe Movie
class Movie {
    // Dichiarazione variabili d'istanza
    private $title;
    private $director;
    private $year; 
    private $genre;

    // Costruttore della classe
    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
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

    public function setMovieGenre($genre) {
        if (is_string($genre) && strlen($genre) > 3) {
            $this->genre = $genre;
        }
        else {
            echo 'Error';
        }
    }

    public function getMovieGenre() {
        return $this->genre;
    }
}

// Istanziazione degli oggetti Movie
$movie1 = new Movie("Iron Man", "Jon Favreau", "2008","action");
$movie2 = new Movie("Thor", "Kenneth Branagh", "2011","action");
$movie3 = new Movie("Captain America: The First Avenger", "Joe Johnston", "2011","action");
$movie4 = new Movie("Marvel's The Avengers", "Joss Whedon", "2012","action");
$movie5 = new Movie("Guardiani della Galassia", "James Gunn", "2014","action");
$movie6 = new Movie("Avengers: Age of Ultron", "Joss Whedon", "2015","action");
$movie7 = new Movie("Ant-Man", "Peyton Reed", "2015","action");
$movie8 = new Movie("Doctor Strange", "Scott Derrickson", "2016","action");
$movie9 = new Movie("Spider-Man: Homecoming", "Jon Watts", "2017","action");
$movie10 = new Movie("Black Panther", "Ryan Coogler", "2018","action");
$movie11 = new Movie("Avengers: Infinity War", "Anthony Russo & Joe Russo", "2018","action");
$movie12 = new Movie("Captain Marvel", "Anna Boden; Ryan Fleck", "2019","action");
$movie13 = new Movie("Avengers: Endgame", "Anthony Russo & Joe Russo", "2019","action");
$movie14 = new Movie("Black Widow", "Cate Shortland", "2021","action");
$movie15 = new Movie("Black Widow", "Cate Shortland", "2021","action");
$movie16 = new Movie("Shang-Chi e la Leggenda dei Dieci Anelli", "Destin Daniel Cretton", "2021","action");
$movie17 = new Movie("Black Widow", "Cate Shortland", "2021","action");
$movie18 = new Movie("Eternals", "Chloé Zhao", "2021","action");
$movie19 = new Movie("Black Widow", "Cate Shortland", "2021","action");
?>

<?php 
echo '<h2>Movie 1:</h2>';
var_dump($movie1);

echo '<h2>Movie 2:</h2>';
var_dump($movie2);

?>