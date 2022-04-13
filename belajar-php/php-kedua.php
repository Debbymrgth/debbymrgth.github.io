<?php

    $nama = "Yoongi";
    $umur = 28;
    $tinggi = 175.5;

    // $kalimat = "Halo, nama saya $nama. Umur saya adalah $umur tahun dan tinggi badan saya adalah $tinggi cm."

    // echo $kalimat;

    //percabangan if-else
    /*

    if($nama == "Yoongi")
    {
        echo "Benar itu Yoongi";
    } else {
        echo "Kamu siapa";
    }
    */

    // Ternary Operator
    /*
    $kalimat = $nama == "Suga" ? "Benar itu Yoongi" : "Kamu siapa?";

    echo $kalimat;
    */

    // perulangan for
    /*
    for ($i=0; $i < 10; $i++) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
    }
    */

    // perulangan while
    /*
    $i = 0;
    while($i <= 10) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }
    */

    // perulangan do while
    /*
    $i = 0;

    do {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    } while($i < 11);
    */

    $nama = array("Kim Namjoon", "Kim Seokjin", "Min Yoongi", "Jung Hoseok", "Park Jimin", "Kim Taehyung", "Jeon Jungkook", "BTS");

    foreach ($nama as $sebutan) {
        echo "Nama saya adalah $sebutan";
        echo "<br/>";
    }
?>