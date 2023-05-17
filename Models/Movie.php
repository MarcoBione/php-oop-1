<?php

class Movie {

    //metodo corretto per non specificare ad ogni singolo elemento il public
    public 
    $title,$original_title,$date,$votes,$country, $genre;

    //contructor
    function __construct(string $title,string $original_title,string $date,int $votes,string $country, Genre $genre){
        $this->title= $title;
        $this->original_title= $original_title;
        $this->date=$date;
        $this->votes=$votes;
        $this->country=$country;
    }
    
}