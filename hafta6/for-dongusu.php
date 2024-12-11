<?php

    // Ekrana "Gelişim Üniversitesi Web Tasarımı ve Kodlama Programı" Yazdırma
    for($i=0; $i <= 10; $i++) {
        echo "<b>Gelişim Üniversitesi</b> <u>Web Tasarımı ve Kodlama Programı</u>" . "<br>";
    }
    
    //1 ile 100 Arasındaki Sayılardan Hem 2'e hem de 5'e Tam Bölünen Sayıları ve Bu Sayıların Toplamını Ekrana Yazdırma 
    echo "1 ve 100 Arasındaki Sayılardan Hem 2'ye Hem de 5'e Bölünen <br> Sayıları Listeleme ve Toplam Sonucunu Bulalım." . "<br>";
    $toplam = 0;

    for($i=1; $i <= 100; $i++) {
        if ($i %2 ==0 && $i %5 ==0) {
            echo $i. "<br>";
            $toplam = $toplam + $i;
        }
    }
    echo "<b>Toplam sonucu: </b>" .$toplam;

?>
