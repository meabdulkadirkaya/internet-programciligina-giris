<?php

    // isset ve unset Kullanımı
    $adSoyad = "Abdulkadir KAYA";
    echo "isset($adSoyad)"."<br>";

    $okulAdi = "İstanbul Gelişim Mesleki Yüksekokulu";
    echo $okulAdi . "<br>";
    unset($okulAdi);
    echo $okulAdi;

    // Doğum Yılı Hesaplama
    $gunumuzTarih = 2024;
    $dogumYili = 2001;
    $yasHesapla = $gunumuzTarih - $dogumYili;
    echo "Benim Yaşım: " . $yasHesapla;

    // Basit Hesa Makinesi
    echo "<h3>Basit Hesap Makinesi</h3>"."<br>";
    $sayi1 = 15;
    $sayi2 = 9;
    $toplama = $sayi1 + $sayi2;
    $cikarma = $sayi1 - $sayi2;
    $carpma = $sayi1 * $sayi2;
    $bolme = $sayi1 / $sayi2;
    $mod = $sayi1 % $sayi2;
    $us = $sayi1 ** $sayi2;
    echo "1. Sayı: " .$sayi1. "<br>".
        "2. Sayı: " .$sayi2. "<br>".
        "Toplama İşleminin Sonucu: " .$toplama. "<br>".
        "Çıkarma İşleminin Sonucu: " .$cikarma. "<br>".
        "Çarpma İşleminin Sonucu: " .$carpma. "<br>".
        "Bölme İşleminin Sonucu: " .$bolme. "<br>".
        "Mod Alma İşleminin Sonucu: " .$mod. "<br>".
        "Üs Alma İşleminin Sonucu: " .$us;

    // Artırma ve Azaltma Operatorleri Kullanımı
    $sayi = 23;
    echo "<u>Yazmış Olduğunuz Sayının Değeri: </u>" .$sayi. "<br>".
    "Sayının Değerini Artırma İşlemi: " .++$sayi. "<br>".
    "Sayının Değerini Azaltma İşlemi: " .--$sayi;

?>
