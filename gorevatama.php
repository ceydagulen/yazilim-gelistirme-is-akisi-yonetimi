<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Görev Atama</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Navbar'ın yüksekliğine göre ayarlayın */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Yazılım Geliştirme Ekibi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="anasayfa.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kullanicilar.php">Kullanıcılar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gorevatama.php">Görev Atama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="silmelistesi.php">Proje Yönetimi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="guncellelistesi.php">Test Yönetimi</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Arama" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Arama</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-5 pt-5">
    <div class="text-center">
        <h1>Görev Atama</h1>
        <form action="gorevatama.php" method="post">
            <div class="mb-3">
                <label for="gorev_adi" class="form-label">Görev Adı</label>
                <input type="text" class="form-control" id="gorev_adi" name="gorev_adi" required>
            </div>
            <div class="mb-3">
                <label for="proje_id" class="form-label">Proje ID</label>
                <input type="text" class="form-control" id="proje_id" name="proje_id" required>
            </div>
            <div class="mb-3">
                <label for="kullanici_id" class="form-label">Kullanıcı ID</label>
                <input type="text" class="form-control" id="kullanici_id" name="kullanici_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Görev Atama</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gorevAdi = $_POST['gorev_adi'];
    $projeId = $_POST['proje_id'];
    $kullaniciId = $_POST['kullanici_id'];

    // Veritabanı bağlantısı
    $servername = "localhost"; // Veritabanı sunucusu
    $username = "root"; // Veritabanı kullanıcı adı
    $password = ""; // Veritabanı şifresi
    $dbname = "yazilimgelistirme"; // Veritabanı adı

    // Bağlantıyı oluştur
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // SQL sorgusunu hazırla ve çalıştır
    $sql = "INSERT INTO gorevatama (gorev_adi, proje_id, kullanici_id) VALUES ('$gorevAdi', '$projeId', '$kullaniciId')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarıyla oluşturuldu.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    // Bağlantıyı kapat
    $conn->close();
}
?>
