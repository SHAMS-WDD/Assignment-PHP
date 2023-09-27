<?php

$text = "The quick brown fox jumps over the lazy dog.";

function textModifier($text) {
    $lowerText=strtolower($text);
    $modifiedText = str_ireplace('Brown', 'red', $lowerText);
    return $modifiedText;
}

$modifiedText = textModifier($text);

echo $modifiedText;
?>