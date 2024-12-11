<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 4 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>Ad:</td>
                <td><input type="text" name="ad"></td>
            </tr>
            <tr>
                <td>Soyad:</td>
                <td><input type="text" name="soyad"></td>
            </tr>
            <tr>
                <td>Vize:</td>
                <td><input type="text" name="vize"></td>
            </tr>
            <tr>
                <td>Final:</td>
                <td><input type="text" name="final"></td>
            </tr>
            <tr>
                <td>Proje:</td>
                <td><input type="text" name="proje"></td>
            </tr>
            <tr>
                <td><input type="submit" name="hesapla" value="Hesapla"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["hesapla"]))
        {
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];
            $vizeNot = $_POST["vize"];
            $finalNot = $_POST["final"];
            $projeNot = $_POST["proje"];
            $ortalama = ($vizeNot * 0.5) + ($finalNot * 0.25) + ($projeNot * 0.25);
            echo "Merhaba ".$ad." ".$soyad."<br>" . "Vize Notun: " .$vizeNot. "<br>" . "Final Notun: " .$finalNot. "<br>" . "Proje Notun: " .$projeNot. "<br>" . "Ortalaman: " .$ortalama. "<br>";
            if($ortalama >= 40 && $projeNot >= 40) {
                echo "Tebrikler " .$ortalama. " ortalama ile dersi tamamladın";
            } else {
                echo "Maalesef " .$ortalama." ile dersten kaldın";
            }
        }
    ?>

</body>
</html>
