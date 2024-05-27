<?php
// MySQL bağlantı kodunu ekliyoruz
include("mysqlbaglanma.php");

// POST verilerini alıyoruz ve güvenli hale getiriyoruz
if (isset($_POST['kullaniciadi']) && isset($_POST['eposta']) && isset($_POST['sifre']) && isset($_GET['id'])) {
    // Değişkenleri güvenli hale getiriyoruz
    $kullaniciadi = mysqli_real_escape_string($baglanti, $_POST['kullaniciadi']);
    $eposta = mysqli_real_escape_string($baglanti, $_POST['eposta']);
    $sifre = mysqli_real_escape_string($baglanti, $_POST['sifre']);
    $id = intval($_GET['id']);

    // Sorguyu hazırlıyoruz
    $sql = "UPDATE kullanicilar SET kullaniciadi='$kullaniciadi', eposta='$eposta', sifre='$sifre' WHERE kullanici_id=$id";

    // Sorguyu veritabanına gönderiyoruz
    $cevap = mysqli_query($baglanti, $sql);

    // HTML başlangıcı ve Türkçe karakter desteği
    echo "<!DOCTYPE html>";
    echo "<html lang='tr'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
    echo "<title>Kullanıcı Güncelleme Sonucu</title>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container mt-5'>";
    echo "<div class='card'>";
    echo "<div class='card-body'>";

    // Eğer cevap FALSE ise hata yazdırıyoruz, değilse başarı mesajı
    if (!$cevap) {
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>Hata:</strong> ' . mysqli_error($baglanti);
        echo '</div>';
    } else {
        echo '<div class="alert alert-success" role="alert">';
        echo "Kayıt Güncellendi.";
        echo '</div>';
    }

    echo "<a href='anasayfa.php' class='btn btn-primary'>Geri Dön</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";


    echo "</body>";
    echo "</html>";

    // Veritabanı bağlantısını kapatıyoruz
    mysqli_close($baglanti);
} else {
    echo "<!DOCTYPE html>";
    echo "<html lang='tr'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
    echo "<title>Geçersiz İstek</title>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container mt-5'>";
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Geçersiz istek. Lütfen tüm alanları doldurun.";
    echo "</div>";
    echo "<a href='anasayfa.php' class='btn btn-primary'>Geri Dön</a>";
    echo "</div>";

    echo "</body>";
    echo "</html>";
}
?>
