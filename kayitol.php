<?php
include("mysqlbaglanma.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    $kullaniciadi = $_POST['kullaniciadi'];
    $cinsiyet = $_POST['eposta'];
    $sifre = $_POST['sifre'];

    $sql = "INSERT INTO kullanicilar ( kullaniciadi, eposta,sifre) VALUES ('$kullaniciadi', '$eposta', '$sifre')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarılı! Giriş yapabilirsiniz.";
        header("Location: bilgikaydet.php");
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Kayıt Ol</h2>
        <div class="form-container">
            <form action="bilgikaydet.php" method="POST">
                <div class="form-group">
                    <label for="kullaniciadi">Kullanıcı Adı:</label>
                    <input type="text" class="form-control" id="kullaniciadi" name="kullaniciadi" required>
                </div>
                <div class="form-group">
                    <label for="eposta">E-posta:</label>
                    <input type="email" class="form-control" id="eposta" name="eposta" required>
                </div>
                <div class="form-group">
                    <label for="sifre">Şifre:</label>
                    <input type="password" class="form-control" id="sifre" name="sifre" required>
                </div>
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="js/bootstrap.min.js"></script>
  
</body>
</html>
