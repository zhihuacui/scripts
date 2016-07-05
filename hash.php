<?php
$i = 100;
while($i>0) {
$arr = range(1,150);
shuffle($arr);
$str = join('',$arr);
$i--;
echo md5($str);
}
?>
