<?php
declare(strict_types=1);
// Étape 1 — Lecture et parcours 
$notes = []; 
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija']; 
echo $notes[array_key_first($notes)]."\n";
echo $notes[array_key_last($notes)]."\n";
echo $notes[count($notes)-1]."\n";
echo count($notes)."\n";
for($i=0;$i<count($notes);$i++){
    echo "Note n° ". $i+1 ." : ".$notes[$i]."\n";
}
$i=0;
foreach($notes as $note){
    echo "Note n° ". $i+1 ." : ".$note."\n";
    $i+=1;
}
foreach($prenoms as $key=>$value){
    echo $key+1 .". ".$value."\n";
}
// Étape 2 — Ajouter, retirer, insérer 
$notes[count($notes)]=16;
array_push($notes,16);
array_unshift($notes,10);
print_r($notes);
$x=array_pop($notes);
$y=array_push($notes);
echo "$x $y\n";
array_splice($notes,2,0,13);
print_r($notes);
unset($notes[1]);
print_r($notes);
$notes = array_values($notes);
print_r($notes);
// Étape 3 — Recherche 
if (in_array(17,$notes)){
    echo "la note 17 existe\n";
}
$index = array_search(9,$notes);
if ($index===false){
    echo "la note 9 n'existe\n";
}
else{
    echo "La note 9 se trouve à l'indice : $index\n";
}
if (in_array('Omar',$prenoms,true)){
    echo "le prénom Omar existe\n";
}
else {
    echo "Le prénom Omar n'existe pas.\n";
}
// Étape 4 — Statistiques 
$notes=[];
$somme= round(array_sum($notes),2)."\n";
$moyenne= round(array_sum($notes)/count($notes),2)."\n";
$min = (empty($notes))? 0.0 : min($notes);
$max = (empty($notes))? 0.0 : max($notes);
echo "Somme : $somme | Moyenne : $moyenne | Min : $min | Max : $max \n";
$min = (empty($notes))? 0.0 : min($notes);
$max = (empty($notes))? 0.0 : max($notes);
echo "Max : $max\n";
echo "Min : $min\n";
$nombre=0;
for($i=0;$i<count($notes);$i++) {
    if ($notes[$i]>=10) $nombre++;
}
echo "le nombre de notes supérieures ou égales à 10: $nombre \n";
echo "Nombre de notes >= 10 (array_filter + count) :".count(array_filter($notes,fn($n)=>$n>=10))."\n";
echo "le pourcentage de réussite: ".round(count(array_filter($notes,fn($n)=>$n>=10))/count($notes)*100,2)."% \n";
// copie du tableau
$n=$notes;
sort($n);
echo (count($n)%2==0)? "la moyenne des deux valeurs centrales: ".$n[intdiv(count($notes),2)]+$n[intdiv(count($notes),2)-1]/2: "la valeur centrale: ".$n[intdiv(count($notes),2)];
echo "\n";
// Étape 5 — Tri et extraction 
// copie le tableau original
$copie=$notes;
// Triez les notes par ordre croissant (sort) 
sort($copie);
print_r($copie);
// Triez les notes par ordre croissant (rsort) 
rsort($copie);
print_r($copie);
// Affichez les 3 meilleures notes 
rsort($notes);
echo "Les 3 meilleures notes : ".implode(", ",array_slice($notes,0,3));
// Affichez les prénoms triés par ordre alphabétique 
sort($prenoms);
print_r($prenoms);
// inversés
print_r(array_reverse($prenoms));
// Étape 6 — Transformer avec array_map, array_filter, array_reduce
$notes=[12, 15, 8, 17, 9, 14, 11];
// Bonus : produisez un nouveau tableau où chaque note est augmentée de 1 point, sans dépasser 20 
$t1=array_map(fn($n)=>min($n+1,20),$notes);
echo "Avec bonus : ".implode(", ",$t1)."\n";
// Admis : produisez le tableau des notes >= 10, réindexé.
$t2=array_values(array_filter($notes,fn($n)=>$n>=10));
print_r($t2);
// Total : calculez la somme des notes avec array_reduce (sans array_sum). 
$total = array_reduce($notes,fn($S,$x)=>$S+$x,0);
echo "La somme des notes : $total \n";
// Prénoms en majuscules
$t3=array_map("strtoupper", $prenoms);
print_r($t3);
// Mentions : produisez un tableau de chaînes 
$Mentions=array_map(fn($n)=>($n<10)?"$n Ajourné":(($n<14)?"$n Passable":(($n<16)?"$n Assez bien":"$n Bien")),$notes);
print_r($Mentions);
// Étape 7 — Chaînes, fusion et ensembles
// Affichez les prénoms
echo implode(", ",$prenoms)."\n";
// Transformez la chaîne "php,js,sql,php,html,js" en tableau 
$t4=array_unique(explode(",","php,js,sql,php,html,js"));
print_r($t4);
// Fusionnez ["php", "sql"] et ["js", "sql"] avec array_merge puis dédoublonnez
$t6=array_unique(array_merge(["php", "sql"],["js", "sql"]));
echo "Fusion dédoublonnée : ".implode(", ",$t6)."\n";
// afficher les éléments communs
$a = ["php","js","sql"];
$b = ["js","html","sql"];
echo "Les éléments communs entre [" . implode(", ", $a) . "] et [" . implode(", ", $b) . "] : ".implode(", ",array_intersect($a,$b))."\n";
echo "Les éléments qui ne sont que dans le premier tableau : ".implode(", ",array_diff($a,$b))."\n";
$paquets = [];
foreach (array_chunk(range(1, 10), 3) as $tabl) {
    array_push($paquets,"[" . implode(", ", $tabl) . "]");
}
echo "Paquets de 3 : " . implode(" ", $paquets) . "\n";
// Étape 8 — Mini-problème : le carnet de notes 
$notes=[];
// calcule le moyenne
function moyenne(array $notes): float{
    if(empty($notes)) return 0.0;
    return round(array_sum($notes)/count($notes),2);
}

echo "Moyenne : ".moyenne($notes)."\n";
// Médiane
function mediane(array $notes): float {
    if (empty($notes)) return 0.0;
    sort($notes);
    $n=intdiv(count($notes),2);
    return (count($notes)%2==0)?$notes[$n]+$notes[$n-1]/2:$notes[$n];
}
echo "Médiane : ".mediane($notes)."\n";
// admis
function admis(array $notes, float $seuil = 10): array {
    return array_values(array_filter($notes,fn($n)=>$n>=$seuil));
}
echo "Admis (>=10) : ".count(admis($notes,10))." sur ".count($notes)." (".round(count(admis($notes,10))/count($notes)*100,2)."%) \n";
// "Les 3 meilleures notes : ".implode(", ",array_slice($notes,0,3))
function meilleures(array $notes, int $n = 3): array{
    rsort($notes);
    return array_slice($notes,0,$n);
}

echo "3 meilleures notes : ".implode(", ",meilleures($notes))."\n";
function histogramme(array $notes): void{
    foreach($notes as $note){
        echo str_repeat("*",$note)."\n";
    }
}
histogramme($notes);