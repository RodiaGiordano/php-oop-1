<?php  



trait Director
{
    public $director;

    function getDirector(){
        
        return $this->director ?? 'dato non disponibile';
    }
}