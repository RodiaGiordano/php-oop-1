<?php  


class SerieTv extends Production {

public $aired_from_year;

public $aired_to_year;

public $number_of_episodes;

public $number_of_seasons; 


public function __construct($name, $language, $genre, $aired_from_year, $aired_to_year, $number_of_episodes, $number_of_seasons)
{
    parent::__construct($name, $language, $genre);

    $this->aired_from_year = $aired_from_year;

    $this->aired_to_year = $aired_to_year;

    $this->number_of_episodes = $number_of_episodes;

    $this->number_of_seasons = $number_of_seasons;
}
public function getDetails()
{
    return "
    <li class='list-group-item'><strong>Titolo:</strong> $this->name</li>
    <li class='list-group-item'><strong>Lingua:</strong> $this->language</li>
    <li class='list-group-item'><strong>Genere:</strong> {$this->genre->genre}</li>

    <li class='list-group-item'><strong>Messa in onda 1° ep:</strong> $this->aired_from_year</li>
    <li class='list-group-item'><strong>Messa in onda ultimo ep:</strong> $this->aired_to_year</li>
    <li class='list-group-item'><strong>numero episodi:</strong> $this->number_of_episodes</li>
    <li class='list-group-item'><strong>numero Stagioni:</strong> $this->number_of_seasons</li>";
}
}
