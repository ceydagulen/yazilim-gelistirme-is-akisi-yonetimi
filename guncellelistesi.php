<?php
 // MySQL bağlantı kodunu ekliyoruz
 include("mysqlbaglanma.php");

 // Sorguyu hazırlıyoruz
 $sql = "SELECT * FROM kullanicilar";

 // Sorguyu veritabanına gönderiyoruz
 $cevap = mysqli_query($baglanti, $sql);

 // Eğer cevap FALSE ise hata yazdırıyoruz      
 if (!$cevap) {
     echo '<br>Hata:' . mysqli_error($baglanti);
     exit;
 }

 // HTML başlangıcı ve Türkçe karakter desteği
 echo "<html lang='tr'>";
 echo "<head>";
 echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
 echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
 echo "<title>Kullanıcı Listesi</title>";
 echo "</head>";
 echo "<body>";
 echo "<div class='container mt-5'>";
 echo "<h2>Kullanıcı Listesi</h2>";
 echo "<table class='table table-hover'>";
 echo "<thead class='thead-dark'>";
 echo "<tr>";
 echo "<th scope='col'>Kullanıcı ID</th>";
 echo "<th scope='col'>Kullanıcı Adı</th>";
 echo "<th scope='col'>E-posta</th>";
 echo "<th scope='col'>Şifre</th>";
 echo "<th scope='col'>Güncelle</th>";
 echo "</tr>";
 echo "</thead>";
 echo "<tbody>";

 // Sorgudan gelen tüm kayıtları tablo içinde yazdırıyoruz
 while ($gelen = mysqli_fetch_array($cevap)) {
     echo "<tr>";
     echo "<td>".$gelen['kullanici_id']."</td>";
     echo "<td>".$gelen['kullaniciadi']."</td>";
     echo "<td>".$gelen['eposta']."</td>";
     echo "<td>".$gelen['sifre']."</td>";
     // Güncelle linki oluşturalım
     echo "<td><a href='guncelle.php?id=".$gelen['kullanici_id']."' class='btn btn-warning btn-sm'>Güncelle</a></td>";
     echo "</tr>";
 }

 // Tablo kodunu bitirelim
 echo "</tbody>";
 echo "</table>";
 echo "<br/><a href='index.php' class='btn btn-primary'>Geri Dön</a>";
 echo "</div>";
 echo "</body>";
 echo "</html>";

 // Veritabanı bağlantısını kapatıyoruz
 mysqli_close($baglanti);
?>
