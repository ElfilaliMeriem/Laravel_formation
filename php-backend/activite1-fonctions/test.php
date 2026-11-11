<?php
require_once __DIR__ . "/fonctions.php";
try{
    echo additionner(12.2,11.9)."\n";
    echo soustraire(12.2,11.9)."\n";
    echo multiplier(12.2,11.9)."\n";
    echo diviser(12.2,4.6)."\n";
}catch(Exception $e){
    echo "erreur ".$e->getMessage();
}
echo maxinum(12.4,30.34,2.6)."\n";
echo maxnombre(14.76,2.8,50.34)."\n";