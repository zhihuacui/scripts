<?php
$a = file_get_contents('query_result.csv');
$arrs = explode("\n", $a);
$a = array();
$b = array();
$arrs = array_filter($arrs, function($a){
if (preg_match('/admin|url|aplus/',$a))
return false;
else 
return true;
});
foreach ($arrs as $arr) {
    $arr = explode(',', $arr);
    $key = preg_replace('/[0-9]*$/', '', $arr[0]);
    $a[$key] = isset($a[$key]) ? $a[$key] + $arr[1] : $arr[1];
//    print_r($arr);
}

arsort($a,1);
foreach ($a as $k =>$v){
    $b[] = $k.','.$v;
}
echo join ("\n", $b);

?>
