<?php
// 課題1 
$name = "Yuta";
if($name = "Yuta"){
  echo "私は{$name}です。";
} else {
  echo "私は{$name}ではありません。";
}

// 課題2

$total=0;  
  
for($i= 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;

// 課題3
$fruits =["apple","orange","lemon","banana","melon"];
foreach($fruits as $fruit){
  echo"要素は".$fruit;
  echo "\n";
}

// 課題4
$start = 1;
$end= 100;

for($i = $start; $i <= $end; $i++){
if($i %5 == 0){
  echo $i;
  echo"\n";
}
}