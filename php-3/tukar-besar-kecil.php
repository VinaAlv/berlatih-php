<?php
function tukar_besar_kecil($string){
//kode di sini
$ubah="";
    for($i=0;$i<= strlen($string)-1 ; $i++){
        if(ctype_upper($string[$i])){
            $kata=strtolower($string[$i]);
        }else{
            $kata=strtoupper($string[$i]);
        }

        $ubah.=$kata;
    }return $ubah;  
}

// TEST CASES
echo tukar_besar_kecil('Hello World')."<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY')."<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!')."<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me')."<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>