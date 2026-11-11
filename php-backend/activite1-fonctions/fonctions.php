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
    if($n%2===0){
        return true;
    }
}
function estPositif(float $n){
    if($n>=0){
        return true;
    }
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
    $f=false;
    if ($n === 1){
        $f=false;
    }
    for($i=2;$i<$n;$i++){
        if($n%$i===0){
            $f=false;
            break;
        }else{
            $f=true;
        }
    }
    
    return $f;
}
