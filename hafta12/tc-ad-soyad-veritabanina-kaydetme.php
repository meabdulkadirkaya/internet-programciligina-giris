<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 12 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <form method="POST" name="form">
        <table>
            <tbody>
                <tr>
                    <td>TC Numarası:</td>
                    <td><input type="text" name="tc"></td>
                </tr>
                <tr>
                    <td>Adı</td>
                    <td><input type="text" name="ad"></td>
                </tr>
                <tr>
                    <td>Soyad:</td>
                    <td><input type="text" name="soyad"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Kaydet" name="kaydet">
                        <input type="submit" value="Güncelle" name="guncelle">
                        <input type="submit" value="Sil" name="sil">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php
        
        // Veritabanı Bağlama
        try {
            $db = new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root", "");
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        // Kaydetme Sistemi
        if(isset($_POST["kaydet"])) {
            $tc = $_POST["tc"];
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $kaydet = $db->exec("INSERT INTO ogrencidurum (ad, soyad, tc) VALUES ('$ad', '$soyad', '$tc')");
                if ($kaydet) {
                    echo "Kayıt Ekleme Başarılı.";
                }
                else {
                    echo "Kayıt Ekleme Başarısız.";
                }
            }
        }

        // Güncelleme Sistemi
        if(isset($_POST["guncelle"])) {
            $tc = $_POST["tc"];
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $guncelle = $db->exec("UPDATE ogrencidurum SET ad='$ad', soyad='$soyad', tc='$tc' WHERE tc='$tc'");
                if ($guncelle) {
                    echo "Güncelleme Başarılı.";
                }
                else {
                    echo "Güncelleme Başarısız.";
                }
            }
        }

        // Silme İşi Sistemi
        if(isset($_POST["guncelle"])) {
            $tc = $_POST["tc"];
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $guncelle = $db->exec("DELETE ogrencidurum SET ad='$ad'");
                if ($guncelle) {
                    echo "Güncelleme Başarılı.";
                }
                else {
                    echo "Güncelleme Başarısız.";
                }
            }
        }

    ?>
    
</body>
</html>
