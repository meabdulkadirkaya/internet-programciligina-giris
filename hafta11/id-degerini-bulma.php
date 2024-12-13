<?php

    include "veritabani-baglantisi.php";

    $kayit = $db->exec("INSERT INTO abdulkadirkaya SET id='5', musteriAdi = 'Muhammed Efe Yüce', musteriFirma = 'Lojistik', musteriLink = 'logistik.com'");

    if($kayit) {
        echo "Kayıt gerçekleştirildi. ID Değeri ".$db->lastInserID();
    }

?>
