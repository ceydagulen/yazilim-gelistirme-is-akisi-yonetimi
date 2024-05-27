<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Yönetimi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-lilac {
            background-color: #C8A2C8; 
            border-color: #C8A2C8; 
            color: white; 
        }
        .btn-lilac:hover {
            background-color: #B190B1; 
            border-color: #B190B1; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Yazılım Geliştirme Ekibi</a>
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
          <a class="nav-link" href="projeyonetimi.php">Proje Yönetimi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testyonetimi.php">Test Yönetimi</a>
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
        <h1>Kullanıcı Yönetimi</h1>
        <p>Aşağıdaki işlemleri gerçekleştirebilirsiniz:</p>
        <a class="btn btn-lilac btn-lg" href="kayitform.php" role="button">Kayıt Gir</a>
        <a class="btn btn-lilac btn-lg" href="listeleme.php" role="button">Kayıt Listele</a>
        <a class="btn btn-lilac btn-lg" href="silmelistesi.php" role="button">Kayıt Sil</a>
        <a class="btn btn-lilac btn-lg" href="guncellelistesi.php" role="button">Kayıt Güncelle</a>
    </div>
</div>


</body>
</html>
