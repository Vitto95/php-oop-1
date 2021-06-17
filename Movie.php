<?php 


  class Movie {
    public $name;
    public $director;
    public $releaseDate;
    public $genre;
    public $runningTime;
    private $mainActor;
    static $counter = 0;

    public function __construct($_name, $_genre = "nd"){
      $this->name = $_name;
      $this->genre = $_genre;
      self::$counter++;
    }

    static function getCounter(){
      return self::$counter;
    }

    public function setMainActor($_mainActor){
      $this->mainActor =  $_mainActor;
    }

    public function getMainActor(){
      return $this->mainActor;
    }
    
  }

?>