<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Listesi</title>
    <
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
}

?>

<div class="container mt-5">
    <h2>Kullanıcı Listesi</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Katılımcı ID</th>
                <th>Kullanıcı Adı</th>
                <th>Eposta</th>
                <th>Şifre</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            
            while ($gelen = mysqli_fetch_array($cevap)) {
                
                echo "<tr>";
                echo "<td>" . $gelen['kullanici_id'] . "</td>";
                echo "<td>" . $gelen['kullaniciadi'] . "</td>";
                echo "<td>" . $gelen['eposta'] . "</td>";
                echo "<td>" . $gelen['sifre'] . "</td>";
                
                // Sil linki oluşturuyoruz
                echo "<td><a href='kayitsil.php?id=" . $gelen['kullanici_id'] . "' class='btn btn-danger'>Sil</a></td>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="anasayfa.php" class="btn btn-primary">Geri Dön</a>
</div>

<?php
// Veritabanı bağlantısını kapatıyoruz
mysqli_close($baglanti);
?>

</body>
</html>
