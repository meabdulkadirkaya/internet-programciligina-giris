<?php 

  include "veritabani-baglantisi.php";
  
  // Veritabanına Exec Kullanarak Manuel Veri Ekleme
  $kaydet = $db->exec("INSERT INTO abdulkadirkaya (id, musteriAdi, musteriFirma, musteriLink) VALUES ('4', 'Yusuf Türlü', 'Fzylab', 'www.fzylab.com')");
  
  if ($kaydet) {
      echo "Kayıt işlemi başarılı";
  } else {
      echo "Kayıt işlemi başarısız";
  }
  
  // Veritabanına Prepare Kullanarak Manuel Veri Ekleme
  $sorgu = $db->prepare("INSERT INTO abdulkadirkaya (id, musteriAdi, musteriFirma, musteriLink) VALUES (:id, :musteriAdi, :musteriFirma, :musteriLink)");
  
  $kayit = $sorgu->execute([
      "id" => 5,
      "musteriAdi" => "Eray Ertan",
      "musteriFirma" => "Eray Agency",
      "musteriLink" => "erayagency.com"
  ]);
  
  if ($kayit) {
      echo "Kayıt işlemi başarılı";
  } else {
      echo "Kayıt işlemi başarısız";
  }

?>
