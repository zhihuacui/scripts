<?php

$source = file_get_contents('data');
echo strlen($source);
$source = file_get_contents('data');
$source = explode("\n", $source);
$source = array_filter($source, function($a){
return strlen($a)>0 && strlen($a)< 150;
return strlen($a) == 6;
});
$source = array_unique($source);
echo 'array(\''.join('\',\'', $source).'\')';
////echo "\nlength = ".count($source)."\n";
?>
