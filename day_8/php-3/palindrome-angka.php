<?php

function reverse($string){
    $result = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $result[strlen($string) - $i - 1] = $string[$i];
    }
    // echo($result);
    return $result;
}

function palindrome_angka($angka) {
    // tulis kode di sini
    while (true){
        $angka++;
        $string = "".$angka;
        if($string === reverse($string)){
            return $string . "<br>";
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>