<?php
function pasangan_terbesar($angka){
// kode di sini
    $string = "".$angka;
    $max = 0;

    for($i = 0; $i < strlen($string) - 1; $i++){
        $curr = (int) substr($string, $i, 2);
        if($curr > $max){
            $max = $curr;
        }
    }

    return $max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>