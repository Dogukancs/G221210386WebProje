<?php

// Formdan gelen verileri alınması
$username = $_POST['kullaniciAdi'] ?? '';
$password = $_POST['sifre'] ?? '';

// Alanlar boşluk kontrolü
if (empty($username) || empty($password)) {
    header("Location: login.html");
    exit();
}

// Kullanıcı adı e-posta formatında mı değil mi kontrolü
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.html");
    exit();
}

// Kullanıcı adı ve şifrem
$correctUsername = "g221210386@sakarya.edu.tr";
$correctPassword = "g221210386";

// Kontrol et
if ($username === $correctUsername && $password === $correctPassword) {
    // Giriş başarılı ise devam et
    echo "<!DOCTYPE html><html lang='tr'><head><meta charset='UTF-8'><meta http-equiv='refresh' content='2;url=index.html'><title>Hoşgeldiniz</title></head><body>";
    echo "<h2>Hoşgeldiniz, " . htmlspecialchars($password) . "!</h2>";
    echo "<p>2 saniye içinde ana sayfaya yönlendiriliyorsunuz...</p>";
    echo "</body></html>";
    exit();
} else {
    // Giriş başarısız
    header("Location: login.html");
    exit();
}
?>