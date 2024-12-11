<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 5 - İnternet Programcılığına Giriş</title>
</head>
<body>

    <h3>Switch Case Yapısı Kullanımı</h3>
    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>Sayı Giriniz (1'den 7'e Kadar):</td>
                <td><input type="text" name="gun"></td>
            </tr>
            <tr>
                <td><input type="submit" name="gonder" value="Gönder"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["gonder"])) {
            $gun = $_POST["gun"];
            switch($gun){
                case 1:
                    echo "Bugün Günlerden Pazartesi";
                    break;
                case 2:
                    echo "Bugün Günlerden Salı";
                    break;
                case 3:
                    echo "Bugün Günlerden Çarşamba";
                    break;
                case 4:
                    echo "Bugün Günlerden Perşembe";
                    break;
                case 5:
                    echo "Bugün Günlerden Cuma";
                    break;
                case 6:
                    echo "Bugün Günlerden Cumartesi";
                    break;
                case 7:
                    echo "Bugün Günlerden Pazar";
                    break;
                default: echo "Böyle Bir Gün Yok";
            }
        }
    ?>

</body>
</html>
