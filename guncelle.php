<?php
// MySQL bağlantı kodunu ekliyoruz
include("mysqlbaglanma.php");

// ID değerini doğruluyoruz ve güvenli hale getiriyoruz
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Sorguyu hazırlıyoruz
    $sql = "SELECT * FROM kullanicilar WHERE kullanici_id=$id";

    // Sorguyu veritabanına gönderiyoruz
    $cevap = mysqli_query($baglanti, $sql);

    // Eğer cevap FALSE ise hata yazdırıyoruz
    if (!$cevap) {
        echo '<br>Hata:' . mysqli_error($baglanti);
        exit;
    }

    // Veritabanından gelen cevabı alıyoruz
    $gelen = mysqli_fetch_array($cevap);

    // Eğer gelen veri yoksa geçersiz ID mesajı veriyoruz
    if (!$gelen) {
        echo 'Geçersiz ID';
        exit;
    }
} else {
    echo 'Geçersiz ID';
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Güncelleme</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Kullanıcı Güncelleme</h2>
        <form action="guncelkaydet.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <label for="kullaniciadi">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="kullaniciadi" name="kullaniciadi" value="<?php echo htmlspecialchars($gelen['kullaniciadi']); ?>" required>
            </div>
            <div class="form-group">
                <label for="eposta">E-posta</label>
                <input type="email" class="form-control" id="eposta" name="eposta" value="<?php echo htmlspecialchars($gelen['eposta']); ?>" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre</label>
                <input type="password" class="form-control" id="sifre" name="sifre" value="<?php echo htmlspecialchars($gelen['sifre']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">KAYDET</button>
        </form>
        <br>
        <a href="index.php" class="btn btn-secondary">Geri Dön</a>
    </div>


</body>
</html>

<?php
// Veritabanı bağlantısını kapatıyoruz
mysqli_close($baglanti);
?>
