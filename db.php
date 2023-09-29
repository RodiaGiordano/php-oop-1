<?php 

include __DIR__ . "./models/movie.php";



$film_1 = new Movie("Il signore degli anelli", 2011, 'eng', new Genre('Fantasy medievale'));

$film_2 = new Movie("Come un gatto in tangenziale", 2010, 'ita', new Genre('Commedia'));
 ?>