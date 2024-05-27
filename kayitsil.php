<?php
 //mysql baglanti kodunu ekliyoruz
 include("mysqlbaglanma.php");
 //sorguyu hazirliyoruz
 $sql = "DELETE FROM kullanicilar WHERE kullanici_id=".$_GET['id'];
 //sorguyu veritabanina gönderiyoruz.
 $cevap = mysqli_query($baglanti,$sql);
 echo "<html>";
 //türkçe karakterleri düzgün görüntüleyebilmek için 
 echo "<meta http-equiv='Content-Type' ";
 echo "content='text/html; charset=UTF-8' />";
 if(!$cevap ){
 echo '<br>Hata:' . mysqli_error($baglanti);
 }
 else
 {
 echo "Kayıt Silindi!</br>";
 echo " <a href='silmelistesi.php'> Listele</a>\n";
 }
 echo "</html>";
 //veritabani baglantisini kapatiyoruz.
 mysqli_close($baglanti);
 ?>