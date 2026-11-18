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
echo number_format($montant, 2, ",", " ") . " MAD"."\n";
echo moyenne(20,10.5,15,16)."\n";
echo moyenne()."\n";
echo aireCercle(4)."\n";
echo perimetreCercle(4)."\n";
echo celsiusVersFahrenheit(25)."\n";
echo FahrenheitVerscelsius(77)."\n";
echo "20000 MAD = " . convertirDevise(20000,0.092). " EUR\n";
echo factorielle(5)."\n";
echo factorielleAvecRecursiveFunction(0)."\n";
print_r(fibonacci(12))."\n";
echo pgcd(12,18)."\n";
echo puissance(4,3)."\n";
echo puissanceRecursive(4,3)."\n";