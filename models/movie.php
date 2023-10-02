

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

}



?>