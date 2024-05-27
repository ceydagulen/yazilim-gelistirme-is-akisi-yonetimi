<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazılım Geliştirme Ekibi İş Akışı Yönetimi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Navbar'ın yüksekliğine göre ayarlayın */
        }
        .img-container {
            max-width: 100%;
            max-height: 500px; /* Maksimum yükseklik ayarı */
            width: auto; /* Genişlik otomatik ayarlanacak */
            height: auto; /* Yükseklik otomatik ayarlanacak */
            display: block;
            margin: 0 auto; /
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kullanicilar.php">Kullanıcılar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gorevatama.php">Görev Atama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projeyonetimi.php">Proje Yönetimi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testyonetimi.php">Test Yönetimi</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Yapmak İstediğiniz İşlem" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Arama</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Yazılım Geliştirme Ekibi İş Akışı Yönetimi</h1>
        <p class="lead">Yazılım Geliştirme Ekibinizi Kolayca Yönetin ve Kullanıcılarınızı Takip Edin.</p>
        <hr class="my-4">
        <p>Lütfen Yukardaki Panelden İşlemlerinizi Seçiniz</p>
        
        
        <div class="mt-4">
            <img src="img2.png" alt="Daha fazla bilgi için tıklayın" class="img-fluid img-container">
        </div>
    </div>
</div>
<br>
<br>
<br>
<footer>
    <p>&copy; 2024 Yazılım Geliştirme Ekibi İş Akışı Yönetimi | <a href="https://github.com/ceydagulen/PHP_SQL_PROJECT.git" target="_blank">GitHub Linkim</a></p>
</footer>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
