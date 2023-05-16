<?php

class Movie {

    public $title;
    public $category;
    public $date;
    public $votes;
    public $country;

    //contructor
    function __construct($_title, $_category,$_date,$_votes,$_country){
        $this->title= $_title;
        $this->category= $_category;
        $this->date=$_date;
        $this->votes=$_votes;
        $this->country=$_country;
    }
    
}