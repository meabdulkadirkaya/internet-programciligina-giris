<?php

    $referanslar = [
        [ 
            "Müşteri:" => "Enver Küreci",
            "Firma:" => "Frechu",
            "Hizmet" => "WordPress Tema"
        ],
        [ 
            "Müşteri:" => "Volkan Deniz İkiz",
            "Firma:" => "Naklov",
            "Hizmet" => "WordPress Tema & HTML, CSS ve JS"
        ]
    ];
    foreach($referanslar as $referans) {
        foreach($referans as $anahtar => $deger)
        {
            echo $anahtar." - ".$deger."<br>";
        }
        echo "<hr>";
    }

?>
