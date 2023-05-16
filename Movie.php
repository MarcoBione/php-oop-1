<?php

class Movie {

    public $title;
    public $original_title;
    public $date;
    public $votes;
    public $country;

    //contructor
    function __construct($title, $original_title,$date,$votes,$country){
        $this->title= $title;
        $this->original_title= $original_title;
        $this->date=$date;
        $this->votes=$votes;
        $this->country=$country;
    }
    
}