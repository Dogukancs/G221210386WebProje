<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h2>Form Sonuçları</h2>";
    echo "Ad Soyad: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "E-posta: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Telefon: " . htmlspecialchars($_POST['phone']) . "<br>";
    echo "Cinsiyet: " . htmlspecialchars($_POST['gender']) . "<br>";
    echo "Şehir: " . htmlspecialchars($_POST['city']) . "<br>";
    echo "Mesaj: " . nl2br(htmlspecialchars($_POST['message'])) . "<br>";
} else {
    echo "Form gönderilmedi!";
}
?>

</body>
</html>