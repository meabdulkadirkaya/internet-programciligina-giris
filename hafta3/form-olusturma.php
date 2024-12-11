<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta 3 - İnternet Programcılığına Giriş</title>
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
                <td><input type="submit" name="gonder" value="Kaydet"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST["gonder"])) {
            $ad = $_POST["ad"];
            $soyad = $_POST["soyad"];
            echo("Merhaba " .$ad. " " .$soyad);
        }
    ?>

</body>
</html>
