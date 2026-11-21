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

