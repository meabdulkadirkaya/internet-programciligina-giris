<?php

    try {
        $db = new PDO("mysql:host=localhost; dbname=abdulkadirkaya; charset=utf8","root", "");
        echo "Kayıt Başarılı";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

?>
