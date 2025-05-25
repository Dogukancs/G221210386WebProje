<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="login.php">GİRİŞ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container mt-4">

    <!-- Mesaj gösterme bölümü -->
    <?php
      if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'logout') {
          echo '<div class="alert alert-success" role="alert">Başarıyla çıkış yapıldı.</div>';
        } elseif ($_GET['msg'] == 'hata') {
          echo '<div class="alert alert-danger" role="alert">Kullanıcı adı veya şifre hatalı.</div>';
        }
      }
    ?>

    <h1>Giriş Yap</h1>
    <form action="kontrol.php" method="post" id="loginForm">
      <label for="email">Kullanıcı Adı:</label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="password">Şifre:</label><br>
      <input type="password" id="password" name="password" required><br><br>
      <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>