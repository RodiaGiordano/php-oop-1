<?php 


include __DIR__ . "./models/Production.php";




$film_1 = new Movie("V per vendetta", 'eng', new Genre(['Azione', 'Fantascienza']), 2005, 132, "James McTeigue");

$film_2 = new Movie("Come un gatto in tangenziale", 'Italiano', new Genre(['Commedia', 'Famiglia']), 2020, 98, "Riccardo Milani");

$serieTv_1 = new SerieTv("rings of powers", "USA", new Genre(['Fantasy', 'Medievale']), 2022, 'in corso', 8, 1, "J.A. Bayona" );

$film_3 = new Movie("Il miglio verde", 'USA', new Genre(['Drammatico', 'Mistery']), 1999, 189, "Frank Darabont");

$film_4 = new Movie("Parasite", 'South Corea', new Genre(['Thriller', 'Drammatico']), 2019, 132, "Bong Joon-ho");






$filmsArray = [
    $film_1,
    $film_2,
    $serieTv_1,
    $film_3,
    $film_4,

];


 ?>