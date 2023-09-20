<?php

function fiboNacci($n){
$vOld=0;
$old=1;
$new=1;

for($i=1;$i<=$n;$i++){
   
    echo $vOld." ";
    $vOld=$old;
    $old=$new;
    $new=$old+$vOld;
    }
    
}
fiboNacci(15);
?>