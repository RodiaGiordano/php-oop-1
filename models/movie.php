

<?php 



class Movie extends Production {

    public $published_year;
    public $running_time;

    
    public function __construct($name, $language, $genre, $published_year, $running_time)
    {
        parent::__construct($name, $language, $genre);

        $this-> published_year = $published_year;
        $this-> setTime($running_time);
    }

   public function setTime($running_time){
    
        $hour = floor($running_time / 60);
        
        $minut = fmod($running_time, 60);
    
        $running_time = $hour . "h " . $minut . "m";
    
        $this->running_time = $running_time;
    
    

   }

    public function getDetails()
    {
        return
        parent::getDetails() . "
        
        <li class='list-group-item'><strong>Anno pubblicazione:</strong> $this->published_year</li>
        <li class='list-group-item'><strong>Durata:</strong> $this->running_time</li>
        ";
    }
    }




?>