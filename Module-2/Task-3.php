<?php

$vOld=0;
$old=1;
$new=1;

for($i=0;$i<20;$i++){
    if($vOld>100){
        break;
    }
    echo $vOld." ";
    $vOld=$old;
    $old=$new;
    $new=$old+$vOld;
}
?>