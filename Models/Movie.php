<?php

class Movie {

    //metodo corretto per non specificare ad ogni singolo elemento il public
    public 
    $title,$original_title,$date,$votes,$country;

    //contructor
    function __construct($title, $original_title,$date,$votes,$country){
        $this->title= $title;
        $this->original_title= $original_title;
        $this->date=$date;
        $this->votes=$votes;
        $this->country=$country;
    }
    
}