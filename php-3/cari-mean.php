<?php

function cari_mean($arr){
//kode di sini
$sum=0;
for($i=0; $i<count($arr); $i++){
    $sum+=$arr[$i];
}
$avg=$sum/count($arr);
return $avg;
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); echo "<br>" ;// 3 
echo cari_mean([3, 5, 7, 5, 3]); echo "<br>" ;// 5
echo cari_mean([6, 5, 4, 7, 3]); echo "<br>" ;// 5
echo cari_mean([1, 3, 3]); echo "<br>" ;// 2
echo cari_mean([7, 7, 7, 7, 7]);echo "<br>" ; // 7

?>