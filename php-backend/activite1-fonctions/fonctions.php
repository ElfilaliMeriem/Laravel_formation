<?php 
declare(strict_types=1); 
function additionner(float $a,float $b){
    return $a+$b;
}
function soustraire(float $a,float $b){
    return $a-$b;
}
function multiplier(float $a,float $b){
    return $a*$b;
}
function diviser(float $a,float $b){
    if($b==0){
        throw new Exception ("Divition par Zero");
        
}
return $a/$b;

}
function estPair(int $n){
    return $n%2===0;
}
function estPositif(float $n){
    return $n>=0;
    
}
function maxinum(float $a,float $b,float $c){
    $num=[$a,$b,$c];
    $max=0;
    foreach($num as $v){
        if ($max<$v){
            $max=$v;
        }
    }
    return $max;
}
function maxnombre(float $a,float $b,float $c){
    $num=[$a,$b,$c];
    return max($num);
}
function estPremier(int $n){
    $f=true;
    if ($n === 1){
        $f=false;
    }
    for($i=2;$i<$n;$i++){
        if($n%$i===0){
            $f=false;
            break;
        }
    }
    
    return $f;
}
function calculerTTC(float $ht, float $tva = 20.0): float { 
    return $ht * (1+$tva/100);
}
function calculerRemise(float $prix, float $pourcentage): float {
    return $prix * (1-$pourcentage/100);
}
function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0, float $tva = 20.0): float {
    return calculerRemise(calculerTTC($prixUnitaire*$quantite,$tva),$remise);
}
function moyenne(float ...$notes): float {
    if (!$notes){
        return 0;
    }
    else{
        return array_sum($notes)/count($notes);
    }
}
function aireCercle(float $rayon): float{
    return ($rayon**2)*M_PI;
}
function perimetreCercle(float $rayon): float{
    return $rayon*M_PI*2;
}
function celsiusVersFahrenheit(float $c): float{
    return $c*9/5+32;
}
function FahrenheitVerscelsius(float $f): float{
    return ($f-32)*5/9;
}
function convertirDevise(float $montant, float $taux): float {
    return $montant * $taux;
}
function factorielle(int $n): int {
    if($n<0) return 0;
    if($n==0) return 1;
    $f=1;
    for($i=1;$i<=$n;$i++){
        $f*=$i;
    }
    return $f;
}
function factorielleAvecRecursiveFunction(int $n): int{
    return ($n<0)?0:(($n<=1)?1:$n*factorielle($n-1));
} 
function fibonacci(int $n): array {
    $a = [];
    $x = 0;
    $y = 1;
    for($i = 0; $i < $n; $i++) {
        array_push($a, $x);
        $somme = $x + $y;
        $x = $y;
        $y = $somme;
    }
    return $a;
}
function pgcd(int $a, int $b): int{
    $n=0;
    while($b!==0){
        $n=$a%$b;
        $a=$b;
        $b=$n;
    }
    return $a;
}
function puissance(float $x, int $n): float{
    $p=1;
    for(;$n>0;$n--) $p*=$x;
    return $p;
}
function puissanceRecursive(float $x, int $n): float{
    return ($n<=0)?1:$x*puissanceRecursive($x, $n-1);
}