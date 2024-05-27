<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Listesi</title>
    <!-- Bootstrap CSS dosyasını ekleyelim -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
// mysql bağlantı kodunu ekliyoruz
include("mysqlbaglanma.php");

// sorguyu hazırlıyoruz
$sql = "SELECT * FROM kullanicilar";

// sorguyu veritabanına gönderiyoruz.
$cevap = mysqli_query($baglanti, $sql);

if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($baglanti);
}

?>

<div class="container mt-5">
    <h1>Kullanıcı Listesi</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Kullanıcı Adı</th>
                <th scope="col">Eposta</th>
                <th scope="col">Şifre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($gelen = mysqli_fetch_array($cevap)) {
                echo "<tr>";
                echo "<td>" . $gelen['kullaniciadi'] . "</td>";
                echo "<td>" . $gelen['eposta'] . "</td>";
                echo "<td>" . $gelen['sifre'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="anasayfa.php" class="btn btn-primary">Geri Dön</a>
</div>

<?php
// veritabani baglantisini kapatıyoruz.
mysqli_close($baglanti);
?>

</body>
</html>
