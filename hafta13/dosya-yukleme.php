<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Hafta 15 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        Dosya Seçiniz: <input type="file" name="dosya" size=40><input type="submit" name="gonder" value="Gönder">
    </form>

    <?php

        $dosya = $_FILES["dosya"]["tmp_name"];
        $isim = $_FILES["dosya"]["name"];
        $boyut = $_FILES["dosya"]["size"];
        $maxBoyut = 1024*1024*3;
        $tipler = $_FILES["dosya"]["type"];
        $uzanti = explode("/", $tipler);
        $gecerliTipler = array(
            "images/png",
            "images/gif",
            "images/jpg",
            "images/jpeg"
        );

        if($_FILES["dosya"]["error"] == 0) {
            if(in_array($tipler, $gecerliTipler)) {
                if($boyut>$maxBoyut) {
                    echo "Yüklenen Dosya Boyutu En Fazla 3MB Olabilir.";
                } else {
                    if(move_uploaded_file($dosya, $isim)) {
                        echo "Dosya Yüklendi.";
                    }
                    else {
                        echo "Dosya Yüklenemedi.";
                    }
                }
            } else {
                echo "Sadece PNG, JPG, GİF ve JPEG Dosyaları Yüklenebilir.";
            }
        } else {
            echo "Bir Sorun Oluştu!";
        }
 
    ?>
    
</body>
</html>
