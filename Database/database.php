<?php

include __DIR__.'/../Models/Movie.php';

$films = [
    new Movie ('Il Padrino','The Godfather','1972-03-24','9.2','en',new Genre('novel')),
    new Movie ('Via Col Vento','Gone With The Wind','1939-12-15','8.6','en',new Genre('classic')),
];