<?php

    // var_dump ve gettype Farkı
    $sayi = 23;
    $ad = "Abdulkadir Kaya";
    var_dump($sayi,$ad);
    echo gettype($sayi);

    // gettype Uygulama
    $degisken = true; 
    $degisken2 = 5; 
    $degisken3 = 5.9; 
    $degisken4 = "Abdulkadir"; 
    $degisken5 = array("Mavi", "Sarı", "Yeşil", "Kırmızı"); 
    $degisken6 = new stdClass;
    $degisken7 = NULL; 
    $degisken8= "23";
    
    echo gettype($degisken)."<br>";
    echo gettype($degisken2)."<br>";
    echo gettype($degisken3)."<br>";
    echo gettype($degisken4)."<br>";
    echo gettype($degisken5)."<br>";
    echo gettype($degisken6)."<br>";
    echo gettype($degisken7)."<br>";
    echo gettype($degisken8)."<br>";

    // Gettype Ekran Görüntüsü
    $sayi = 23;
    echo "<b>Birinci Değişkenin Adı: \$sayi</b>" . "<br>". "Değeri: ".$sayi."<br>" . "Türü: ";
    echo gettype( $sayi )."<br>" . "<br>";

    $adi = "Abdulkadir";
    echo "<b>İkinci Değişkenin Adı: \$adi</b>"."<br>" . "Değeri: ".$adi."<br>" . "Türü: ";
    echo gettype( $adi )."<br>" . "<br>"; 
    
    $ondalik = 1.509;
    echo "<b>Üçüncü Değişkenin Adı: \$ondalik</b>"."<br>" . "Değeri: ". $ondalik."<br>" . "Türü: ";
    echo gettype( $ondalik ) ."<br>" . "<br>"; 

    $mantiksal = true;
    echo "<b>Dördüncü Değişkenin Adı: \$mantiksal</b>" . "<br>"."Değeri: ".$mantiksal."<br>" . "Türü: ";
    echo gettype( $mantiksal )."<br>" . "<br>";

    // Settype
    $a = "23";
    settype($a, "integer"); 
    var_dump($a);
    echo gettype($a)."<br>";

    $b = 23;
    settype($b, "string"); 
    var_dump($b);
    echo gettype($b)."<br>";

    $c = true;
    settype($c, "integer");
    var_dump($c);
    echo gettype($c)."<br>";

    // Sabit Örnekleri
    echo "<h3><u>Sabit Örnekleri</u></h3>";
    define("Pi", 3.14);
    echo "Oluşturulan Sabit <b>Pi</b> Değeri: " .Pi. "<br>" . "<br>";

    define("dersAdi", "İnternet Programcılığı I", false);
    echo "<u>Dersimizin Adı:</u> ".dersAdi;

    // PHP Sabitleri 
    echo "<h2>PHP Sabitleri</h2>" . "<br>".
        "Kodun Bulunduğu Yer: " .(__LINE__). "<br>".
        "Dosyanın Bulunduğu Yer: " .(__FILE__). "<br>".
        "Sunucudaki PHP versiyonu: " .phpversion(). "<br>".
        "Sunucu İşletim Sistemi: " .(PHP_OS). "<br>".
        "Dosyanın Bulunduğu Dizin: " .(__DIR__); 

    // Çevresel Değişkenler
    echo "<h2>Çevresel Değişkenler</h2>" . "<br>".
        "<b>Sitenin Dosya Yolu:</b>" .$_SERVER ['DOCUMENT_ROOT']. "<br>".
        "<b>Tarayıcı Türü ve Versiyonu:</b>".  $_SERVER['HTTP_USER_AGENT']. "<br>".
        "<b>DNS Adı:</b>". $_SERVER['SERVER_NAME']. "<br>".
        "<b>Sitenin Port Adresi:</b>" .$_SERVER['SERVER_PORT']. "<br>".
        "<b>Host Adresi:</b>" .$_SERVER['HTTP_HOST'];

?>
