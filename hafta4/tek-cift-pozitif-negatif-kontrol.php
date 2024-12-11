<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 4 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <h3>Sayının Pozitif & Negatif ve Tek & Çift Kontrolü</h3>
    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>Sayı Giriniz:</td>
                <td><input type="text" name="sayi"></td>
            </tr>
            <tr>
                <td><input type="submit" name="kontrolEt" value="Kontrol Et"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["kontrolEt"])) {
            $sayi = $_POST["sayi"];

            if($sayi > 0 && $sayi%2 == 0) {
                echo "Sayı Pozitif ve Çift";
            } else if($sayi > 0 && $sayi % 2 == 1) {
                echo "Sayı Pozitif ve Tek";
            } else if($sayi < 0 && $sayi % 2 == 0) {
                echo "Sayı Negatif ve Çift";
            } else if ($sayi < 0 && $sayi % 2 == -1) {
                echo "Sayı Negatif ve Tek";
            } else {
                echo "Sayı Değeri Sıfırdır";
            }
        }
    ?>

</body>
</html>
