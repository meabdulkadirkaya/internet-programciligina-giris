<?php

    // Ekrana 5 Kere İsminizi Yazdırma
    $sayi = 1;
    do {
        echo $sayi." - Abdulkadir KAYA" ."<br>";
        $sayi++;
    }
    while ($sayi <= 5);

    //30 Sayısının Bölenleri
    $sayi = 30;
    $bolen = 1;

    do {
        if($sayi % $bolen == 0) {
            echo $bolen." Sayısı " .$sayi." Sayısının Bir Bölenidir." . "<br>";
        }
        $bolen++;
    }
    while($bolen <= $sayi);

?>
