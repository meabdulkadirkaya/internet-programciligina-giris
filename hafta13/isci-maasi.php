<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Hafta 15 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <form method="POST" action="">
        <table>
            <tbody>
                <tr>
                    <td>T.C. Kimlik Numarası</td>
                    <td><input type="number" name="tcno"></td>
                </tr>
                <tr>
                    <td>Adınız</td>
                    <td><input type="text" name="ad"></td>
                </tr>
                <tr>
                    <td>Soyad</td>
                    <td><input type="text" name="soyad"></td>
                </tr>
                <tr>
                    <td>Cinsiyet</td>
                    <td><input type="radio" name="cinsiyet" value="Kadın">Kadın <input type="radio" name="cinsiyet" value="Erkek">Erkek</td>
                </tr>
                <tr>
                    <td>Maaş</td>
                    <td><input type="number" name="maas"></td>
                </tr>
                <tr>
                    <td>Çocuk Sayısı</td>
                    <td><input type="radio" name="cocuksayisi" value="1"> 1 <input type="radio" name="cocuksayisi" value="2"> 2 <input type="radio" name="cocuksayisi" value="3"> 3 ve Üzeri</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Ekle" name="ekle">
                        <input type="submit" value="Listele" name="listele">
                        <input type="submit" value="Güncelle" name="guncelle">
                        <input type="submit" value="Sil" name="sil">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php

    $host = "localhost";
    $username = "root";
    $dbname = "isci_maas";
    $password = "";

    $db = new mysqli($host, $username, $password, $dbname);

    if (!$db->set_charset("utf8mb4")) {
        die("Karakter seti ayarlanamadı: " . $db->error);
    }

    if (isset($_POST["ekle"])) {
        $tc = htmlspecialchars($_POST['tcno']);
        $ad = htmlspecialchars($_POST['ad']);
        $soyad = htmlspecialchars($_POST['soyad']);
        $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
        $maas = htmlspecialchars($_POST['maas']);
        $cocuksayisi = htmlspecialchars($_POST['cocuksayisi']);
        $tmaas = 0;

        if ($cocuksayisi == "1") {
            $tmaas = $maas + 500;
        } elseif ($cocuksayisi == "2") {
            $tmaas = $maas + 600;
        } elseif ($cocuksayisi == "3") {
            $tmaas = $maas + 700;
        } else {
            $tmaas = $maas;
        }
    
        $sql = "INSERT INTO durum (tc, ad, soyad, cinsiyet, maas, cocuksayisi, tmaas) VALUES ('$tc', '$ad', '$soyad', '$cinsiyet', '$maas' ,'$cocuksayisi', '$tmaas')";
    
        if ($db->query($sql) === TRUE) {
            echo "<p class='success'>Başarıyla veritabanına kaydedildi!</p>";
        } else {
            echo "<p class='error'>Mesaj kaydedilirken bir hata oluştu: " . $db->error . "</p>";
        }
    }

    if (isset($_POST["guncelle"])) {

        $tc = htmlspecialchars($_POST['tcno']);
        $ad = htmlspecialchars($_POST['ad']);
        $soyad = htmlspecialchars($_POST['soyad']);
        $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
        $maas = htmlspecialchars($_POST['maas']);
        $cocuksayisi = htmlspecialchars($_POST['cocuksayisi']);
        $tmaas = 0;

        if ($cocuksayisi == "1") {
            $tmaas = $maas + 500;
        } elseif ($cocuksayisi == "2") {
            $tmaas = $maas + 600;
        } elseif ($cocuksayisi == "3") {
            $tmaas = $maas + 700;
        } else {
            $tmaas = $maas;
        }
   
        $sql = "UPDATE durum SET ad = '$ad', soyad = '$soyad', cinsiyet = '$cinsiyet', maas = '$maas', cocuksayisi = '$cocuksayisi', tmaas = '$tmaas' WHERE tc = '$tc'";
    
        if ($db->query($sql) === TRUE) {
            echo "<p class='success'>Güncelleme Başarılı!</p>";
        } else {
            echo "<p class='error'Güncelleme Başarısız. " . $db->error . "</p>";
        }
    }

    if (isset($_POST["listele"])) {
        
        $sql = "SELECT * FROM durum";
        $result = $db->query($sql);

        if ($result->num_rows > 0) { ?>
            <table border='1'>
                <thead>
                    <tr>
                        <th>TC</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Cinsiyet</th>
                        <th>Maas</th>
                        <th>Çocuk Sayısı</th>
                        <th>Toplam Maas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['tc']); ?></td>
                            <td><?php echo htmlspecialchars($row['ad']); ?></td>
                            <td><?php echo htmlspecialchars($row['soyad']); ?></td>
                            <td><?php echo htmlspecialchars($row['cinsiyet']); ?></td>
                            <td><?php echo htmlspecialchars($row['maas']); ?></td>
                            <td><?php echo htmlspecialchars($row['cocuksayisi']); ?></td>
                            <td><?php echo htmlspecialchars($row['tmaas']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <p class="error">Kayıt bulunamadı.</p>
            <?php
        }
    }

    if (isset($_POST["sil"])) {

        $tc = htmlspecialchars($_POST['tcno']);
    
        $sql = "DELETE FROM durum WHERE tc = '$tc'";
    
        if ($db->query($sql) === TRUE) {
            echo "<p class='success'>Silme Başarılı!</p>";
        } else {
            echo "<p class='error'>Silme Başarısız. " . $db->error . "</p>";
        }
    }
    
    $db->close();
    ?>
    
</body>
</html>
