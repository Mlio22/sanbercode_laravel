<?php


function cek_kelas($daftarKelas, $kelas){
    if(count($daftarKelas) > 0){
        for($i = 0; $i < count($daftarKelas); $i++){
            if($daftarKelas[$i] === $kelas) return true;
        }
    }
    return false;
}


function skor_terbesar($arr){
    
    $skor_per_kategori = [];
    $kelas = [];

    foreach ($arr as $org){
        if(!cek_kelas($kelas, $org["kelas"])){
            array_push($kelas, $org["kelas"]);
        }
    }

    foreach($kelas as $kls){
        $temp_arr = [];
        for($i = 0; $i < count($arr); $i++){
            if($kls === $arr[$i]["kelas"]){
                array_push($temp_arr, $arr[$i]);
            }
        }

        $maxOrg = null;
        $max = 0;
    
        foreach($temp_arr as $org){
            if($org["nilai"] > $max) {
                $max = $org["nilai"];
                $maxOrg = $org;
            };
        }
        $skor_per_kategori[$maxOrg["kelas"]] = $maxOrg;
    }
    return $skor_per_kategori;
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