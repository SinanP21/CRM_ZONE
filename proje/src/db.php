<?php
$host = 'db'; // Docker içinde çalışıyorsan 'db' olabilir. Değilsen '127.0.0.1' yap.
$dbname = 'crm_platform';
$username = 'sinan';
$password = '1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
