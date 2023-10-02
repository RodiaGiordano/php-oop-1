

<?php 



class Movie extends Production {

    public $published_year;
    public $running_time;

    
    public function __construct($name, $language, $genre, $published_year, $running_time)
    {
        parent::__construct($name, $language, $genre);

        $this-> published_year = $published_year;
        $this-> running_time = $running_time;
    }

   

    public function getDetails()
    {
        return "
        <li class='list-group-item'><strong>Titolo:</strong> $this->name</li>
        <li class='list-group-item'><strong>Lingua:</strong> $this->language</li>
        <li class='list-group-item'><strong>Genere:</strong> {$this->genre->genre}</li>
        <li class='list-group-item'><strong>Anno pubblicazione:</strong> $this->published_year</li>
        <li class='list-group-item'<strong>Durata:</strong> $this->running_time minuti</li>
        ";
    }
    }




?>