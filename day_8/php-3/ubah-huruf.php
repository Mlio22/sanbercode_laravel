<?php
function ubah_huruf($string){
//kode di sini
    for($i = 0; $i < strlen($string); $i++){
        echo chr(ord($string[$i]) + 1);
    }
    echo ord("z") . " - " . ord("Z"). count([1,2,3,4, [5,6,7,6]]);
    return "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>