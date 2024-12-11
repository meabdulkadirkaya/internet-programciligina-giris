<?php

    // Karar Yapısı
    $sayi = 7;
    echo "Tanımlanmış Sayı Değeri: " .$sayi. "<br>";
    if($sayi > 3 && $sayi < 10) {
        echo "Sayı Değeri 3'ten Büyük 10'dan Küçüktür";
    }

    // if-else Yapısı
    $kullaniciAdi = "abdulkadirkaya";
    $sifre = 123456;
    echo "Tanımlanmış Kullanıcı Adı: " .$kullaniciAdi. "<br>" . "Tanımlanmış Kullanıcı Şifresi: " .$sifre. "<br>";
    if($kullaniciAdi == "abdulkadirkaya" && $sifre == 123456) {
        echo "Kullanıcı Adı ve Şifre Doğru";
    } else {
        echo "Kullanıcı Adı ve Şifre Yanlış";
    }

    // Ternary Yapısı
    $sayi = 50;
    echo "Tanımlanmış Sayı Değeri: " .$sayi. "<br>";
    echo ($sayi > 10)? "Sayı 10'dan büyük":"Sayı 10'dan küçük";

?>
