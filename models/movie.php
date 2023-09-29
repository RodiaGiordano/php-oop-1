

<?php 

include __DIR__ . "./genre.php";


class Movie {

    public $name;

    public $yearRelease;

    public $language;

    public $genre;

    
    public function __construct($name, $yearRelease, $language, Genre $genre)
    {
        $this->name = $name;
        $this->yearRelease = $yearRelease;
        $this->language = $language;
        $this->genre = $genre;
    }
    
    public function getFullInfo(){
        return "$this->name - {$this->genre->genre} - $this->yearRelease - $this->language";
        
    }
}



?>