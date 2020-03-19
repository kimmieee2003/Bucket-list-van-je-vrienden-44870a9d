<?php
$aantal = readline("Hoeveel vrienden zal ik vragen om hun droom?");
if(is_numeric($aantal)) {
    $bucket = array();
    for($i=1; $i <= $aantal; $i++){
$naam =readline("wat is je naam?");
$droom = readline("Wat is jouw droom?");
$totaal[$naam]=$droom;

    }
    foreach($totaal as $naam1 =>$droom1){
echo "$naam1 heeft als droom $droom1".PHP_EOL;

    }
}else{
    echo "dit is geen getal.";
}
?>