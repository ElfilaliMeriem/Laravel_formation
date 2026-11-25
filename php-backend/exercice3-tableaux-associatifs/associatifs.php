<?php 
declare(strict_types=1);
// Étape 1 — La fiche d’un stagiaire 
$stagiaire = [ 
    'nom'     => 'Alami', 
    'prenom'  => 'Sara', 
    'age'     => 21, 
    'filiere' => 'Développement digital', 
    'notes'   => ['php' => 16, 'js' => 14, 'sql' => 15], 
]; 
echo strtoupper($stagiaire["prenom"])." ".strtoupper($stagiaire["nom"]).", ".$stagiaire["age"]."ans, filière ".$stagiaire["filiere"];
$stagiaire["ville"]="Casablanca";
$stagiaire["age"]=22;
echo $stagiaire["email"] ?? "non renseigné\n";
// echo isset($stagiaire["nom"])."\n";// 1
// echo array_key_exists("nom",$stagiaire)."\n";// 1
$stagiaire["telephone"]=null;
// echo isset($stagiaire["telephone"])."\n"; //vide
// echo array_key_exists("telephone",$stagiaire)."\n";// 1
unset($stagiaire["ville"]);
echo "la note de php: ".$stagiaire['notes']['php']."\n";
echo "Moyenne : ".round(array_sum($stagiaire)/count($stagiaire["notes"]),2)."\n" ;
foreach($stagiaire["notes"] as $key=>$val){
    echo "$key : $val/20 \n";
}