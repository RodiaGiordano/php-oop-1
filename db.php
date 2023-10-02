<?php 


include __DIR__ . "./models/Production.php";




$film_1 = new Movie("V per vendetta", 'eng', new Genre('Azione, distopico'), 2005, 132);

$film_2 = new Movie("Come un gatto in tangenziale", 'Italiano', new Genre('Commedia'), 2020, 'ciao');

$serieTv_1 = new SerieTv("rings of powers", "USA", new Genre('Fantasy'), 1999, 2008, 146, 8 );

$film_3 = new Movie("Il miglio verde", 'USA', new Genre('Drammatico'), 2020, 'ciao');

$film_4 = new Movie("Parasite", 'South Corea', new Genre('Thriller/Drammatico'), 2020, 'ciao');






$filmsArray = [
    $film_1,
    $film_2,
    $serieTv_1,
    $film_3,
    $film_4,

];


 ?>