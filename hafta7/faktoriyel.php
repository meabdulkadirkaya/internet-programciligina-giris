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
                <td>Sayı:</td>
                <input type="text" name="sayi">
            </tr>
            <tr>
                <td><input type="submit" name="gonder" value="Gönder"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST["gonder"])) {
        $sayi = $_POST["sayi"];
        $faktoriyel = 1;

        if($sayi < 0) {
            echo "Negatif Sayıların Faktöriyeli Bulunmaz"."<br>";
        } else {
            for($i=1; $i<=$sayi; $i++)
            {
                $faktoriyel = $faktoriyel*$i;
            }
            echo $sayi." Sayısının Faktöriyeli: " .$faktoriyel;
        }
    }
    ?>

</body>
</html>
