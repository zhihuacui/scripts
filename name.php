<?php
$source = file_get_contents('data.php');
$array = explode('</li><li>', $source);
echo 'array(';
foreach($array as $name) {
    echo '\''.mb_substr($name, -2, 2,'utf-8').'\'';
    echo ',';
}
echo '\'孔明\')';
