<?php

// 課題1 

function kadai1($a){
return $a*2;
}
$c=kadai1(5);
echo $c;
echo "\n";


// 課題2

function kadai2($a,$b){
    return $a+$b;
}   
    $c=kadai2(4,5);
    echo $c;
    echo "\n";

// 課題3

function kadai3($arr){
   $result=1;
    foreach($arr as $x){
        $result*=$x;
    }
    return $result;
    }
    echo kadai3(array(1,3,5,7,9));
    
// 課題4

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
     $max_number=$a;
     }
 }
  return $max_number;
 }
 echo max_array(array(1,5,10,15,20));
echo"\n";

// 課題5-1

$kadai="<html><body><title>課題用</title><p>サンプルテキスト </p></body></html>";
$kadai_result=strip_tags($kadai);
echo$kadai_result;

// 課題5-2
$fruits=["apple","banana","lemon"];
array_push($fruits,"pineapple","melon");
print_r($fruits);

// 課題5-3
$array1=[1,2,3];
$array2=[4,5,6];
$array3=[7,8,9];
$array=array_merge($array1,$array2,$array3);
print_r($array);

// 課題5-4

echo "現在のUNIXタイムスタンプ".time();
$time= mktime(0,0,0,2,19,2020);
echo $time;

// 課題5-5

echo date("Y,M,D");
