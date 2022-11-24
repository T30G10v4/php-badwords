<?php

$original_text = $_GET["original-text"];
$banned_word = $_GET["banned-word"];

$banned_text = str_replace($banned_word,"***",$original_text);

echo $banned_text;

?>