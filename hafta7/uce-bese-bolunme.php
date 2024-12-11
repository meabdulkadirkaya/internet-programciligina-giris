<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 7 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>1. Sayıyı Giriniz:</td>
                <td><input type="text" name="sayi1"></td>
            </tr>
            <tr>
                <td>2. Sayıyı Giriniz:</td>
                <td><input type="text" name="sayi2"></td>
            </tr>
            <tr>
                <td>Seçim Yapınız:</td>
                <td>
                    <select name="secim">
                        <option value="uceBolunme">İki Sayı Arasındaki 3'e Bölünen Sayılar</option>
                        <option value="beseBolunme">İki Sayı Arasındaki 5'e Bölünen Sayılar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="gonder" value="Gönder"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST["gonder"])) {
        $sayi1 = $_POST["sayi1"];
        $sayi2 = $_POST["sayi2"];
        $secim = $_POST["secim"];

        switch ($secim) {
            case "uceBolunme":
                if ($sayi1 > $sayi2) {
                    $enb = $sayi1;
                    $enk = $sayi2;
                } else {
                    $enb = $sayi2;
                    $enk = $sayi1;
                }
                for ($i = $enk; $i <= $enb; $i++) {
                    if ($i % 3 == 0) {
                        echo "3'e bölünen sayılar: " . $i . "<br>";
                    }
                }
                break;
            case "beseBolunme":
                if ($sayi1 > $sayi2) {
                    $enb = $sayi1;
                    $enk = $sayi2;
                } else {
                    $enb = $sayi2;
                    $enk = $sayi1;
                }
                for ($i = $enk; $i <= $enb; $i++) {
                    if ($i % 5 == 0) {
                        echo "5'e bölünen sayılar: " . $i . "<br>";
                    }
                }
                break;
        }
    }
    ?>

</body>
</html>
