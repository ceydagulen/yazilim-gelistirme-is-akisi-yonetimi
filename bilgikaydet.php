<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sonucu</title>
    <!-- Bootstrap CSS dosyasını ekleyelim -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
// MySQL bağlantı kodunu ekliyoruz
include("mysqlbaglanma.php");

// Değişkenleri formdan alıyoruz
extract($_POST);
$hashed_password = password_hash($sifre, PASSWORD_DEFAULT);

echo "<div class='container mt-5'>";
echo "<h2>Girdiğiniz Bilgiler</h2>";
echo "<p>Kullanıcı Adı: $kullaniciadi</p>";
echo "<p>E-posta: $eposta</p>";
echo "<p>Şifre: $sifre</p>";

// Sorguyu hazırlıyoruz
$sql = "INSERT INTO kullanicilar (kullaniciadi, eposta, sifre) VALUES ('$kullaniciadi', '$eposta', '$hashed_password')";

// Sorguyu veritabanına gönderiyoruz
$cevap = mysqli_query($baglanti, $sql);

// Eğer cevap False ise hata yazdırıyoruz
if (!$cevap) {
    echo '<div class="alert alert-danger" role="alert">';
    echo 'Hata: ' . mysqli_error($baglanti);
    echo '</div>';
} else {
    echo '<div class="alert alert-success" role="alert">';
    echo 'Veritabanına eklendi.';
    echo '</div>';
    echo '<a href="index.php" class="btn btn-primary">Geri Dön</a>';
}

echo "</div>";

// Veritabanı bağlantısını kapatıyoruz
mysqli_close($baglanti);
?>

</body>
</html>
