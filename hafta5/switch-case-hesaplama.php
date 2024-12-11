<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 5 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <h3>Switch Case ile Hesap Makinası</h3>
    <form name="form" action="" method="POST">
        <tr>
            <td>1. Sayıyı Giriniz:</td>
            <td><input type="text" name="sayi1"></td>
        </tr>
        <tr>
            <td>2. Sayıyı Giriniz:</td>
            <td><input type="text" name="sayi2"></td>
        </tr>
        <tr>
            <td>İşlem Tipini Seçiniz:</td>
            <td>
                <select name="secim">
                    <option value="toplama">Toplama</option>
                    <option value="cikarma">Çıkarma</option>
                    <option value="carpma">Çarpma</option>
                    <option value="bolme">Bölme</option>
                </select>
            </td>
          </tr>
        <tr>
        <td>
            <input type="submit" name="gonder" value="İşlem Yap"></td>
        </tr>
    </form>

    <?php
        if(isset($_POST["gonder"])) {
            $sayi1 = $_POST["sayi1"];
            $sayi2 = $_POST["sayi2"];
            $ksecim = $_POST["secim"];
            $topla = $sayi1+$sayi2;
            $cikar = $sayi1-$sayi2;
            $carp = $sayi1*$sayi2;
            $bol = $sayi1/$sayi2;

            switch($ksecim)
            {
                case "toplama":
                    echo "Toplama İşleminin Sonucu: " .$topla;
                    break;
                case "cikarma":
                    echo "Çıkarma İşleminin Sonucu: " .$cikar;
                    break;
                case "carpma":
                    echo "Çarpma İşleminin Sonucu: " .$carp;
                    break;
                case "bolme":
                    echo "Bölme İşleminin Sonucu: " .$bol;
                    break;
            }
        }
    ?>

</body>
</html>
