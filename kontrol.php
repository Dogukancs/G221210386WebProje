<?php
session_start();

$dogru_kullanici = "g221210386@sakarya.edu.tr";
$dogru_sifre = "g221210386";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['email'] === $dogru_kullanici && $_POST['password'] === $dogru_sifre) {
        $_SESSION['user'] = $dogru_kullanici;
        header("Location: index.html");
        exit;
    } else {
        header("Location: login.php?msg=hata");
        exit;
    }
}
?>