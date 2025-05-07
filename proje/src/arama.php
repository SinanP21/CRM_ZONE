<?php
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['q']) && !empty(trim($_GET['q']))) {
    $arama = trim($_GET['q']);
    
    $stmt = $conn->prepare("SELECT * FROM packages WHERE name LIKE :search OR description LIKE :search");
    $stmt->execute(['search' => "%$arama%"]);
    $sonuclar = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sonuclar = [];
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Arama Sonuçları</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #313a80;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .product-card h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }
        .product-card p {
            font-size: 14px;
            color: #555;
        }
        .product-card strong {
            display: block;
            margin-top: 10px;
            color: #313a80;
            font-size: 16px;
        }
        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #313a80;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Arama Sonuçları</h1>
    <?php if (count($sonuclar) > 0): ?>
        <div class="product-grid">
    <?php foreach ($sonuclar as $urun): ?>
        <?php
            switch ($urun['id']) {
                case 1: $sayfa = "urun1.php"; break;
                case 2: $sayfa = "urun2.php"; break;
                case 3: $sayfa = "urun3.php"; break;
                case 4: $sayfa = "urun4.php"; break;
                default: $sayfa = "#"; break;
            }
        ?>
        <a href="<?= $sayfa ?>" class="product-card">
            <img src="img/<?= htmlspecialchars($urun['image_path']) ?>" alt="<?= htmlspecialchars($urun['name']) ?>">
            <h3><?= htmlspecialchars($urun['name']) ?></h3>
        </a>
    <?php endforeach; ?>
</div>

    <?php else: ?>
        <p>Sonuç bulunamadı.</p>
    <?php endif; ?>

    <a class="back-link" href="index.php">🔙 Ana Sayfaya Dön</a>
</body>
</html>
