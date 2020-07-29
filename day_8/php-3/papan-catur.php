<body><?php

function papan_catur($angka) {
// tulis kode di sini
    for($i = 0; $i < $angka; $i++){
        if($i % 2){
            // ganjil
            for($j = 1; $j < $angka; $j++){
                if($j === 1){
                    // harus menggunakan nbsp agar spasi tetap (pada awal)
                    echo (htmlspecialchars_decode("&nbsp"));
                }
                echo "# ";
            }
            echo "<br>";
        }
        else{
            // genap
            for($j = 0; $j < $angka; $j++){
                echo "#";
                if($j !== ($angka - 1)){
                    echo " ";
                }
            }
            echo "<br>";

        }
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>
</body>