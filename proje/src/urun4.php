<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Analytics Tanıtımı</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #d61f1f;
      --light: #ffeaea;
      --dark: #b81414;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #f4f6f8;
      color: #333;
    }

    header {
      background-color: var(--primary);
      color: #fff;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 1.5rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(to right, var(--light), #ffd3d3);
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 24px;
      background-color: var(--primary);
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background-color: var(--dark);
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-bottom: 10px;
      color: var(--primary);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 500px;
      margin: 40px auto;
    }

    input, textarea {
      padding: 12px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button[type="submit"] {
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      cursor: pointer;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #eee;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Analytics</h1>
    <nav>
      <ul>
        <li><a href="#features">Özellikler</a></li>
        <li><a href="#about">Hakkında</a></li>
        <li><a href="#cta">Başla</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h2>Veriyi Anlamlıya Dönüştür</h2>
    <p>Zoho Analytics ile verileri etkileyici grafiklere ve içgörülere dönüştürün.</p>
    <button class="btn" onclick="scrollToForm()">Ücretsiz Deneyin</button>
  </section>

  <section id="features" class="features">
    <div class="card">
      <h3>Görsel Raporlama</h3>
      <p>Sürükle bırak panellerle anlık analiz oluşturun.</p>
    </div>
    <div class="card">
      <h3>Otomatik Veri Çekme</h3>
      <p>Excel, veritabanı, bulut sistemlerinden otomatik veri alın.</p>
    </div>
    <div class="card">
      <h3>İçgörü Odaklı Grafikler</h3>
      <p>Trendleri, anomaliyi ve fırsatları grafiklerle keşfedin.</p>
    </div>
    <div class="card">
      <h3>Paylaşım ve Güvenlik</h3>
      <p>Takım üyeleriyle güvenli veri paylaşımı sağlayın.</p>
    </div>
  </section>

  <section id="about" class="hero" style="background: #fff;">
    <h2>Neden Zoho Analytics?</h2>
    <p>Analytics, verileri sadece görüntülemek değil, onları anlamlandırmak için geliştirilmiş güçlü bir BI platformudur.</p>
  </section>

  <section id="cta" class="hero">
    <h2>Analytics'i Deneyin</h2>
    <p>30 gün ücretsiz deneyin, verilerinizle stratejik kararlar alın.</p>
    <button class="btn" onclick="scrollToForm()">Hemen Başlayın</button>
  </section>

  <!-- Talep Formu -->
  <section id="talepForm" class="hero" style="background: #fff;">
    <h2>Analytics Talep Formu</h2>
    <form action="talep_kaydet.php" method="POST">
      <input type="hidden" name="package_id" value="4">
      <input type="text" name="name" placeholder="Adınız" required>
      <input type="email" name="email" placeholder="E-posta adresiniz" required>
      <input type="text" name="company_name" placeholder="Şirket Adı" required>
      <textarea name="message" placeholder="Mesajınız (isteğe bağlı)" rows="4"></textarea>
      <button type="submit">Gönder</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Zoho Analytics Tanıtımı. Tüm Hakları Saklıdır.</p>
  </footer>

  <script>
    function scrollToForm() {
      document.getElementById("talepForm").scrollIntoView({ behavior: 'smooth' });
    }
  </script>

</body>
</html>
