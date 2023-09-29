<?php 

include __DIR__ . "./models/movie.php";



$film_1 = new Movie("V per vendetta", 2005, 'eng', new Genre('Azione, distopico'));

$film_2 = new Movie("Come un gatto in tangenziale", 2017, 'Italiano', new Genre('Commedia'));

$film_3 = new Movie("Il miglio verde", 1999, 'USA', new Genre('Drammatico'));

$film_4 = new Movie("Parasite", 2019, '
South Corea', new Genre('Thriller/Drammatico'));


// var_dump($film_1);
// var_dump($film_2);
// var_dump($film_3);
// var_dump($film_4);

$filmsArray = [
    $film_1,
    $film_2,
    $film_3,
    $film_4
];

 ?>