<?php
require_once __DIR__ . "/fonctions.php";
$a= 10.5;
$b = 5.5;
$c = 7.5;

echo "$a + $b = ".additionner($a,$b)."\n";
echo  "$a - $b = ".soustraire($a,$b)."\n";
echo "$a x $b = ".multiplier($a,$b)."\n";
try{
    echo "$a / $b = ".diviser($a,$b)."\n";
    echo "0 / $b = ".diviser(0,$b)."\n";
    echo "$a / 0 = ".diviser($a,0)."\n";
}catch(Exception $e){
    echo "erreur ".$e->getMessage();
}
echo estPair(12)."\n";
echo estPair(9)."\n";
echo estPositif(9.5)."\n";
echo estPositif(7.5)."\n";
echo maxinum($a,$b,$c)."\n";
echo maxnombre($a,$b,$c)."\n";
echo estPremier(9)."\n";
echo calculerTTC(2000)."\n";
echo calculerRemise(2000.0,10.0)."\n";
echo calculerFacture(100,10,10)."\n";
$montant = calculerFacture(100,10,10,20);
echo number_format($montant, 2, ",", " ") . " MAD";