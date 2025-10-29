<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AraçSepeti - <?php echo $sayfa_basligi; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
      .card-img-top {
        height: 250px;
        object-fit: cover;
        object-position: center center;
      }
      .carousel-inner img {
        max-height: 550px;
        width: 100%;
        object-fit: cover;
        object-position: center center;
      }
      /* RS200 için özel düzeltmeler */
      img[alt*="RS200"] {
        object-position: center bottom !important;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="AraçSepeti Logo" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo ($sayfa == 'anasayfa' ? 'active' : ''); ?>" href="index.php?sayfa=anasayfa">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tüm İlanlar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($sayfa == 'login' ? 'active' : ''); ?>" href="index.php?sayfa=login">Giriş Yap</a>
            </li>
            <li class="nav-item">
                <a class="btn <?php echo ($sayfa == 'ilan_ver' ? 'btn-success active' : 'btn-primary'); ?>" href="index.php?sayfa=ilan_ver">ÜCRETSİZ İLAN VER</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container mt-4 mb-5">