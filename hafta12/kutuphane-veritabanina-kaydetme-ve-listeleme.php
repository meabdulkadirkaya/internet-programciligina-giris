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
                    <td>Kitabın Adı:</td>
                    <td><input type="text" name="kitabinAdi"></td>
                </tr>
                <tr>
                    <td>Kitabın Türü</td>
                    <td>
                        <select name="kitabinTuru">
                            <option value="Roman">Roman</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Yazarın Adı:</td>
                    <td><input type="text" name="yazarinAdi"></td>
                </tr>
                <tr>
                    <td>Yayınevi:</td>
                    <td><input type="text" name="yayinevi"></td>
                </tr>
                <tr>
                    <td>Sayfa Sayısı:</td>
                    <td><input type="text" name="sayfaSayisi"></td>
                </tr>
                <tr>
                    <td>Özet:</td>
                    <td>
                        <textarea name="ozet" id=""></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Kaydet" name="kaydet">
                        <input type="submit" value="Güncelle" name="guncelle">
                        <input type="submit" value="Sil" name="sil">
                        <input type="submit" value="Listele" name="listele">
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
            $kitabinAdi = $_POST["kitabinAdi"];
            $kitabinTuru = $_POST["kitabinTuru"];
            $yazarinAdi = $_POST["yazarinAdi"];
            $yayinevi = $_POST["yayinevi"];
            $sayfaSayisi = $_POST["sayfaSayisi"];
            $ozet = $_POST["ozet"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $kaydet = $db->exec("INSERT INTO kutuphane (kitabinAdi, kitabinTuru, yazarinAdi, yayinevi, sayfaSayisi, ozet) VALUES ('$kitabinAdi', '$kitabinTuru', '$yazarinAdi', '$yayinevi', '$sayfaSayisi', '$ozet')");
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
            $kitabinAdi = $_POST["kitabinAdi"];
            $kitabinTuru = $_POST["kitabinTuru"];
            $yazarinAdi = $_POST["yazarinAdi"];
            $yayinevi = $_POST["yayinevi"];
            $sayfaSayisi = $_POST["sayfaSayisi"];
            $ozet = $_POST["ozet"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $guncelle = $db->exec("UPDATE kutuphane SET kitabinTuru='$kitabinTuru', yazarinAdi='$yazarinAdi', yayinevi='$yayinevi', sayfaSayisi='$sayfaSayisi', ozet='$ozet' WHERE kitabinAdi='$kitabinAdi')");
                if ($guncelle) {
                    echo "Güncelleme Başarılı.";
                }
                else {
                    echo "Güncelleme Başarısız.";
                }
            }
        }

        // Silme İşi Sistemi
        if(isset($_POST["sil"])) {
            $kitabinAdi = $_POST["kitabinAdi"];
            $kitabinTuru = $_POST["kitabinTuru"];
            $yazarinAdi = $_POST["yazarinAdi"];
            $yayinevi = $_POST["yayinevi"];
            $sayfaSayisi = $_POST["sayfaSayisi"];
            $ozet = $_POST["ozet"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $sil = $db->exec("DELETE kutuphane SET yayinevi='$yayinevi'");
                if ($sil) {
                    echo "Silme İşlemi Başarılı.";
                }
                else {
                    echo "Silme İşlemi Başarısız.";
                }
            }
        }

        // Listeleme İşi Sistemi
        if(isset($_POST["listele"])) {
            $kitabinAdi = $_POST["kitabinAdi"];
            $kitabinTuru = $_POST["kitabinTuru"];
            $yazarinAdi = $_POST["yazarinAdi"];
            $yayinevi = $_POST["yayinevi"];
            $sayfaSayisi = $_POST["sayfaSayisi"];
            $ozet = $_POST["ozet"];

            if($db) {
                echo "Veritabanı Bağlantısı Gerçekleşti."."<br>";
                $listele = $db-> query("SELECT * FROM kutuphane");
                while ($gelenVeri = $listele->fetch()) {
                    echo "Adı: ". $gelenVeri['kitabinAdi']. " ". "Adı: ". $gelenVeri['kitabinAdi']. " "Adı: ". $gelenVeri['kitabinAdi']. ";
                }
                if ($listele) {
                    echo "Silme İşlemi Başarılı.";
                }
                else {
                    echo "Silme İşlemi Başarısız.";
                }
            }
        }

    ?>
    
</body>
</html>
