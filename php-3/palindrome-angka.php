<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if ($angka >=0 && $angka<10){
    $angka++;
    return $angka;
  }else{
    do{
      $angka+=1;
      $str = (string)$angka;    // konversi dari int ke String
      $panjang = strlen ($str);
                $cek= "";
                for($i=$panjang-1 ;$i>=0;$i--){
                    $cek.=$str[$i];         
                }
      }while($cek != $angka);
      return $angka ;
    }   
}
// TEST CASES
echo palindrome_angka(8). "<br>"; // 9
echo palindrome_angka(10). "<br>"; // 11
echo palindrome_angka(117). "<br>"; // 121
echo palindrome_angka(175). "<br>"; // 181
echo palindrome_angka(1000). "<br>"; // 1001

?>