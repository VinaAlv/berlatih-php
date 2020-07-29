<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $hitung=array();
    for ($i=0; $i<count($arr)-1;$i++){
        $sel = $arr[$i+1] - $arr[$i];
        array_push($hitung, $sel);
    }

    for($j=0; $j<count($hitung)-1; $j++){
        if($hitung[$j] != $hitung[$j+1]){
            echo "false";
        }else{
            echo "true";
        }
    }           
     echo "<br>";
    
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>