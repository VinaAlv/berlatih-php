<?php
function ubah_huruf($string){
//kode di sini
$huruf="abcdefghijklmnopqrstuvwxyz";
$tampil="";
for($i=0;$i<= strlen($string)-1 ; $i++){
    $now= strrpos($huruf, $string[$i]);
    $tampil.=substr($huruf, $now+1, 1);
}

return $tampil;
}

// TEST CASES
echo ubah_huruf('wow') ."<br>"; // xpx
echo ubah_huruf('developer') ."<br>"; // efwfmpqfs
echo ubah_huruf('laravel')."<br>"; // mbsbwfm
echo ubah_huruf('keren')."<br>"; // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>