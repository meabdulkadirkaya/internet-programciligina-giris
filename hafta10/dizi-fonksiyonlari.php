<?php

    // Dizilerde Ekle Çıkar Fonksiyonları
    echo "<h3>Array_unshift() Kullanımı</h3>";
    $diller = array("PHP", "C#");
    array_unshift($diller, "Javascript", "Phyton");
    print_r($diller);

    echo "<h3>Array_shift() Kullanımı</h3>";
    array_shift($diller);
    print_r($diller);

    echo "<h3>Array_push() Kullanımı</h3>";
    array_push($diller,"Vue","Laravel");
    print_r($diller);

    echo "<h3>Array_pop() Kullanımı</h3>";
    array_pop($diller);
    print_r($diller);

    echo "<h3>Unset Kullanımı</h3>";
    unset($diller["2"]);
    print_r($diller);

    // Dizi Birleştirme
    echo "<h3>Dizi Elemanlarını Birleştirme</h3>";
    $marmaraBolge = array("Balıkesir", "İstanbul", "Bursa");
    $egeBolge = array("İzmir", "Manisa", "Aydın");
    $tumBolge = array_merge($marmaraBolge, $egeBolge);
    echo "<pre>";
    print_r($tumBolge);
    echo "</pre>";

    // Dizideki Ortak Elemanı Bulma
    echo "<h3>Dizideki Ortak Eleman</h3>";
    $dizi1 = array("Araba","Kalem","Ev");
    $dizi2 = array("Araba","kalem","masa");
    $dizi3 = array("Kalem","Araba","Sandalye");
    $dizi4 = array("Masa","Kalem","Araba");
    $ortak = array_intersect($dizi1, $dizi2, $dizi3, $dizi4);
    echo "<pre>";
    print_r($ortak);
    echo "</pre>";

    // Dizi Elemanlarını Tek Seferde Çıktı Alma
    echo "<h3>İmplode Kullanımı</h3>";
    $programlamaDilleri = array("PHP", "HTML", "CSS", "Javascript");
    $duzenle = implode(" | ", $programlamaDilleri);
    echo $duzenle;*/

    // Dizi Elemanlarından Rastgele Seçim
    echo "<h3>Diziden Rastgele Eleman Seçme</h3>";
    $sehir = array("Amasya", "Tokat", "Çorum", "Samsun", "Yozgat");
    $rastgele = array_rand($sehir);
    echo $sehir[$rastgele];

    // Dizi Elemanlarını Tersine Çevirme
    echo "<h3>Dizi Elemanlarını Tersine Çevirme</h3>";
    $isim = array("Abdulkadir", "İpek", "Aleyna", "Mertkan");
    $tersCevir = array_reverse($isim);
    echo "İlk hali"."<br>";
    echo "<pre>";
    print_r($isim);
    echo "</pre>";

    echo "Ters hali"."<br>";
    echo "<pre>";
    print_r($tersCevir);
    echo "</pre>";

    // Dizi Sayıcıları
    echo "<h3>Dizi Sayıcıları</h3>";
    $sayi = array(6,2,4,1,1,3,5,6);
    echo "Eleman sayısı: ".count($sayi)."<br>".
        "Dizideki elemanlarının çarpım sonucu: ".array_product($sayi)."<br>".
        "Dizideki elemanlarının toplam sayısı: ".array_sum($sayi)."<br>".
        "Dizideki Tekrar Eden Elemanlar: ";
    print_r(array_count_values($sayi));

?>
