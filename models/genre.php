<?php 
class Genre {

    public $genre;


    public function __construct( array $genre)
    {
        
    $this->genre = $genre;        
        
        
    }
    
    public function getDetails(){
        return $this->genre;
    }


}


  ?>