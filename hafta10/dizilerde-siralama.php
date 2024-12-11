<?php

    // Dizilerde Sıralama
    echo "<h3>Dizilerde Sıralama</h3>";
    $iller=array(
        "Amasya" => 5,
        "Tokat" => 60,
        "Samsun" => 55,
        "Yozgat" => 66,
        "Çorum" => 19,
    );

    // Küçükten Büyüğe Sıralama
    echo "<h5>Dizi Elemanlarını Anahtar Değerlerini Koruyarak Küçükten Büyüğe Sıralama</h5>";
    echo "<pre>";
    asort($iller);
    print_r($iller);
    echo "</pre>";

    // Büyükten Küçüğe Sıralama    
    echo "<h5>Dizi Elemanlarını Anahtar Değerlerini Koruyarak Büyükten Küçüğe Sıralama</h5>";
    echo "<pre>";
    arsort($iller);
    print_r($iller);
    echo "</pre>";

    // Küçükten Büyüğe Doğru Sıralama 
    $sayi=array(
        "1" => 15,
        "2" => 9,
        "3" => 23,
        "4" => 90,
        "5" => 51,
    );
    echo "<h5>Dizi Elemanlarını Küçükten Büyüğe Doğru Sıralama</h5>";
    echo "<pre>";
    sort($sayi);
    print_r($sayi);
    echo "</pre>";

    // Büyükten küçüğe Doğru Sıralama
    echo "<h5>Dizi Elemanlarını Büyükten küçüğe Doğru Sıralama</h5>";
    echo "<pre>";
    rsort($sayi);
    print_r($sayi);
    echo "</pre>";

    // Rastgele Sıralama
    echo "<h5>Dizi Elemanlarını Rastgele Sıralama</h5>";
    echo "<pre>";
    shuffle($sayi);
    print_r($sayi);
    echo "</pre>";

    // İndis Değerlerine Göre Küçükten Büyüğe Sıralama
    echo "<h5>Dizi Elemanlarını İndis Değerlerine Göre Küçükten Büyüğe Sıralama</h5>";
    echo "<pre>";
    ksort($sayi);
    print_r($sayi);
    echo "</pre>";

    // İndis Değerlerine Göre Büyükten Küçüğe Sıralama
    echo "<h5>Dizi Elemanlarını İndis Değerlerine Göre Büyükten Küçüğe Sıralama</h5>";
    echo "<pre>";
    krsort($sayi);
    print_r($sayi);
    echo "</pre>";

?>
