<?php  
include __DIR__ . "./genre.php";
include __DIR__ . "./movie.php";
include __DIR__ . "./serieTv.php";

class Production {

    public $name;

    public $language;

    public $genre;

    
    public function __construct($name, $language, Genre $genre)
    {
        $this->name = $name;
        $this->language = $language;
        $this->genre = $genre;
    }
    
    public function getDetails()
    {
        return "
        <li class='list-group-item'><strong>Titolo:</strong> $this->name</li>
        <li class='list-group-item'><strong>Lingua:</strong> $this->language</li>
        <li class='list-group-item'><strong>Genere:</strong> {$this->genre->genre}</li>
        ";

    }
    }
   



?>