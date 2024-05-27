<?php
session_start();
include("mysqlbaglanma.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];

    $sql = "SELECT * FROM kullanicilar WHERE kullaniciadi = '$kullaniciadi' AND sifre = '$sifre'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['kullaniciadi'] = $kullaniciadi;
        header("Location: anasayfa.php");
    } else {
        echo "Kullanıcı adı veya şifre yanlış!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1 class="text-center mt-5">Kullanıcı Kayıt Formu</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form action="bilgikaydet.php" method="POST">
                    <div class="form-group">
                        <label for="kullaniciadi">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="kullaniciadi" name="kullaniciadi" required>
                    </div>
                    <div class="form-group">
                        <label for="eposta">E-posta</label>
                        <input type="email" class="form-control" id="eposta" name="eposta" required>
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre</label>
                        <input type="password" class="form-control" id="sifre" name="sifre" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                            </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
                <br>
                <a href="kayitol.php">Kayıtlı değil misiniz? Kayıt olun.</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="js/bootstrap.bundle.min.js"></script>
 
</body>
</html>
