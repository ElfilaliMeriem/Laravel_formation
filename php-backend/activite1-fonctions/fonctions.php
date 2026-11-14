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
