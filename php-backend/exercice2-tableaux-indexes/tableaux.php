<?php
declare(strict_types=1);
$notes = [12, 15, 8, 17, 9, 14, 11]; 
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
    echo $key.". ".$value."\n";
}
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