<?php 
  class Movie{
    protected $genre;
    protected $title;
    protected $runningTime;
    protected $releaseDate;
    protected $director;
        
    /**
     * __construct
     *
     * @param  mixed $genre
     * @param  mixed $title
     * @param  mixed $runningTime
     * @param  mixed $releaseDate
     * @param  mixed $director
     * @return void
     */
    function __construct($genre,$title,$runningTime,$releaseDate,$director){
      $this->genre=$genre;
      $this->title=$title;
      $this->runningTime=$runningTime;
      $this->releaseDate=$releaseDate;
      $this->director=$director;
    }    
    /**
     * setTitle
     *
     * @param  mixed $title
     * @return void
     */
    public function setTitle($title){
      if($title){
        $this->title = $title;
      }
    }    
    /**
     * setGenre
     *
     * @param  mixed $genre
     * @return void
     */
    public function setGenre($genre){
      if($genre){
        $this->genre = $genre;
      }
    }
  }
?>