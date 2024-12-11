<?php

    // Bilgiler
    $bilgiler = array(
        "Eğitim Bilgileri: ",
            "Önlisans: "=>"İstanbul Gelişim Mesleki Yüksekokulu",
        "Deneyim: ",
            "Frontend Developer" => "Naklov",
            "Frontend Developer" => "Frechu",
            "Frontend Developer" => "Onur Özden - Web Çözümleri",
        "Programlama Dilleri: ",
            "HTML", "CSS", "JS", "WordPress",
    );
    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo $bilgiler["Lisans: "];

    // Günler
    $gunler = array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");
    echo "<b>Haftanın Günleri</b>" . "<br>";
    for($i=0; $i<count($gunler); $i++) {
        echo $gunler[$i]."<br>";
    }

?>
