<?php
// echo phpinfo();

$arr = [
    ['a' =>2, 'b' => 2],
    ['b' => 1],
    ['b' => 3],
];
$arr2 = array_sort($arr, 'b');
// print_r($arr2);exit;
$str = 0;
if (!$str) {
    echo 111;exit;
}
//二维数组排序， $arr是数据，$keys是排序的健值，$order是排序规则，1是升序，0是降序
function array_sort($arr, $keys, $order=0) {
    if (!is_array($arr)) {
        return false;
    }
    $keysvalue = array();
    foreach($arr as $key => $val) {
        $keysvalue[$key] = $val[$keys];
    }
    if($order == 0){
        asort($keysvalue);
    }else {
        arsort($keysvalue);
    }
    reset($keysvalue);
    foreach($keysvalue as $key => $vals) {
        $keysort[$key] = $key;
    }
    $new_array = array();
    foreach($keysort as $key => $val) {
        $new_array[$key] = $arr[$val];
    }
    return $new_array;
}
