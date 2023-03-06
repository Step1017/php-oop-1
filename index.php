<?php
// Definizione della classe Movie
class Movie {
    // Dichiarazione variabili d'istanza
    private $title;
    private $director;
    private $year; 
    private $genre;

    // Costruttore della classe
    public function __construct(string $title, string $director, int $year, array $genre) {
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
// $movie1 = new Movie("Iron Man", "Jon Favreau", "2008",["action","fantasy","adventure"]);
// $movie2 = new Movie("Thor", "Kenneth Branagh", "2011",["action","fantasy","adventure"]);
// $movie3 = new Movie("Captain America: The First Avenger", "Joe Johnston", "2011",["action","fantasy","adventure"]);
// $movie4 = new Movie("Marvel's The Avengers", "Joss Whedon", "2012",["action","fantasy","adventure"]);
// $movie5 = new Movie("Guardiani della Galassia", "James Gunn", "2014",["action","fantasy","adventure","comedy"]);
// $movie6 = new Movie("Avengers: Age of Ultron", "Joss Whedon", "2015",["action","drama"]);
// $movie7 = new Movie("Ant-Man", "Peyton Reed", "2015",["action","fantasy","comedy"]);
// $movie8 = new Movie("Doctor Strange", "Scott Derrickson", "2016",["action","fantasy","drama"]);
// $movie9 = new Movie("Spider-Man: Homecoming", "Jon Watts", "2017",["action"]);
// $movie10 = new Movie("Black Panther", "Ryan Coogler", "2018",["action"]);
// $movie11 = new Movie("Avengers: Infinity War", "Anthony Russo & Joe Russo", "2018",["action","drama"]);
// $movie12 = new Movie("Captain Marvel", "Anna Boden; Ryan Fleck", "2019",["action"]);
// $movie13 = new Movie("Avengers: Endgame", "Anthony Russo & Joe Russo", "2019",["action","drama","fantasy"]);
// $movie14 = new Movie("Black Widow", "Cate Shortland", "2021",["action"]);
// $movie15 = new Movie("Black Widow", "Cate Shortland", "2021",["action"]);
// $movie16 = new Movie("Shang-Chi e la Leggenda dei Dieci Anelli", "Destin Daniel Cretton", "2021",["action"]);
// $movie17 = new Movie("Black Widow", "Cate Shortland", "2021",["action"]);
// $movie18 = new Movie("Eternals", "Chloé Zhao", "2021",["action"]);
// $movie19 = new Movie("Black Widow", "Cate Shortland", "2021",["action"]);

//trasformo oggetti Movie in array
$movies = array (
new Movie("Iron Man", "Jon Favreau", "2008",["action","fantasy","adventure"]),
new Movie("Thor", "Kenneth Branagh", "2011",["action","fantasy","adventure"]),
new Movie("Captain America: The First Avenger", "Joe Johnston", "2011",["action","fantasy","adventure"]),
new Movie("Marvel's The Avengers", "Joss Whedon", "2012",["action","fantasy","adventure"]),
new Movie("Guardiani della Galassia", "James Gunn", "2014",["action","fantasy","adventure","comedy"]),
new Movie("Avengers: Age of Ultron", "Joss Whedon", "2015",["action","drama"]),
new Movie("Ant-Man", "Peyton Reed", "2015",["action","fantasy","comedy"]),
new Movie("Doctor Strange", "Scott Derrickson", "2016",["action","fantasy","drama"]),
new Movie("Spider-Man: Homecoming", "Jon Watts", "2017",["action"]),
new Movie("Black Panther", "Ryan Coogler", "2018",["action"]),
new Movie("Avengers: Infinity War", "Anthony Russo & Joe Russo", "2018",["action","drama"]),
new Movie("Captain Marvel", "Anna Boden; Ryan Fleck", "2019",["action"]),
new Movie("Avengers: Endgame", "Anthony Russo & Joe Russo", "2019",["action","drama","fantasy"]),
new Movie("Black Widow", "Cate Shortland", "2021",["action"]),
new Movie("Black Widow", "Cate Shortland", "2021",["action"]),
new Movie("Shang-Chi e la Leggenda dei Dieci Anelli", "Destin Daniel Cretton", "2021",["action"]),
new Movie("Black Widow", "Cate Shortland", "2021",["action"]),
new Movie("Eternals", "Chloé Zhao", "2021",["action"]),
new Movie("Black Widow", "Cate Shortland", "2021",["action"])
);
?>

<!-- <?php 
// echo '<h2>Movie 1:</h2>';
// var_dump($movie1);

// echo '<h2>Movie 2:</h2>';
// var_dump($movie2);

// ?> -->



<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
        <title>PHP Movie</title>
    </head>
    <body>
        <div class="container mt-5">
            <table class="table table-warning">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie) : ?>
                        <tr>
                            <td><?php echo $movie->getMovieTitle() ?></td>
                            <td><?php echo $movie->getMovieDirector() ?></td>
                            <td><?php echo $movie->getMovieYear() ?></td>
                            <td><?php echo implode(", ", $movie->getMovieGenre()) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>