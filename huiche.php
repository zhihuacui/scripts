<?php
$data =  file_get_contents('data');
$i= 0;
while($i < strlen($data)) {
    echo ord($data[$i]);
    echo "\n";
    $i++;
}
?>
