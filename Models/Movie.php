<?php

include __DIR__. '/Genre.php';

class Movie {

    //metodo corretto per non specificare ad ogni singolo elemento il public
    public 
    $title,$original_title,$date,$votes,$country,$genre;

    //contructor
    function __construct(string $title ='',string $original_title = '',string $date='',string $votes='',string $country='en',Genre $genre){
        $this->title= $title;
        $this->original_title= $original_title;
        $this->date=$date;
        $this->votes=$votes;
        $this->country=$country;
        $this->genre = $genre;
    }

    //function for details
    Public function GetDetails(){                                   //complex element between {..}
        return "Votes: $this->votes <br> Language:$this->country <br> Genre:{$this->genre->name}";
    }
    
}