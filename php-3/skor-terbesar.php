<?php
function skor_terbesar($arr){
//kode di sini
  $Laravel=[];
  $ReactNative=[];
  $ReactJs=[];
  $hasil=[];

  foreach($arr as $key => $row){
    $nilai [$key] = $row['nilai'];
    $kelas [$key] = $row['kelas'];
  }

  array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $arr); //sorting array

  for($i=0;$i<=count($arr)-1; $i++){
    if($arr[$i]['kelas'] == 'React Native'){
      $ReactNative[]=$arr[$i];
    }else if($arr[$i]['kelas'] == 'React JS'){
      $ReactJs[]=$arr[$i];
    }else if($arr[$i]['kelas'] == 'Laravel'){
      $Laravel[]=$arr[$i];
    }
  }
  
  $hasil[]=$ReactNative[0];
  $hasil[]=$ReactJs[0];
  $hasil[]=$Laravel[0];

  return $hasil;

}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo "<pre>";
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>