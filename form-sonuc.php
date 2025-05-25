<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="card">';
    echo '<div class="card-header bg-primary text-white"><h2>Form Sonuçları</h2></div>';
    echo '<div class="card-body">';
    echo "<p><strong>Ad Soyad:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p><strong>E-posta:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Telefon:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
    echo "<p><strong>Cinsiyet:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
    echo "<p><strong>Şehir:</strong> " . htmlspecialchars($_POST['city']) . "</p>";
    echo "<p><strong>Mesaj:</strong><br>" . nl2br(htmlspecialchars($_POST['message'])) . "</p>";
    echo '</div></div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Form gönderilmedi!</div>';
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="main.js"></script>
</body>
</html>