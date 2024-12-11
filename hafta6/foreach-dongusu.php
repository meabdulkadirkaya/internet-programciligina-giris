<?php

    // Haftanın Günleri
    $gunler = array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");
    foreach($gunler as $gun) {
        echo $gun."<br>";
    }

    // Alfabedeki Kalın ve İnce Ünlü Harfler
    echo "Alfabedeki Kalın ve İnce Ünlü Harflerin Listesi:"."<br>";
    $kalınInceHarfler = array("a","ı","o","u","e","i","ö","ü");

    foreach($kalınInceHarfler as $alfabe => $sira) {
        echo $alfabe. " : " .$sira. "<br>";
    }
?>
