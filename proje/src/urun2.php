<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRM Plus Tanıtımı</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #1a4ecb;
      --light: #eef4ff;
      --white: #fff;
      --gray: #f4f6f8;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: var(--gray);
      color: #333;
    }

    header {
      background-color: var(--primary);
      color: var(--white);
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
      color: var(--white);
      text-decoration: none;
      font-weight: bold;
    }

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(to right, var(--light), #dce8ff);
    }

    .hero h2 {
      font-size: 2.2rem;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 1.1rem;
      margin-bottom: 25px;
    }

    .btn {
      padding: 10px 20px;
      background-color: var(--primary);
      color: var(--white);
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #163ba0;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 40px;
    }

    .card {
      background: var(--white);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
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
      margin: 30px auto;
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
      background-color: #e0e0e0;
      color: #555;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<header>
  <h1>CRM Plus</h1>
  <nav>
    <ul>
      <li><a href="#features">Özellikler</a></li>
      <li><a href="#about">Hakkında</a></li>
      <li><a href="#basla">Başla</a></li>
    </ul>
  </nav>
</header>

<section class="hero">
  <h2>Satışlarınızı Akıllıca Yönetin</h2>
  <p>CRM Plus ile müşteri ilişkilerinizi güçlendirin ve satış verimliliğinizi artırın.</p>
  <button class="btn" onclick="document.getElementById('talepFormu').scrollIntoView({ behavior: 'smooth' });">Ücretsiz Deneyin</button>
</section>

<section id="features" class="features">
  <div class="card">
    <h3>Satış Otomasyonu</h3>
    <p>Tekrarlayan görevleri otomatikleştirerek zamandan tasarruf edin.</p>
  </div>
  <div class="card">
    <h3>Raporlama & Analiz</h3>
    <p>Gerçek zamanlı analizlerle işinizi veriye dayalı yönetin.</p>
  </div>
  <div class="card">
    <h3>Çok Kanallı İletişim</h3>
    <p>E-posta, telefon, canlı sohbet gibi tüm kanalları tek yerden yönetin.</p>
  </div>
  <div class="card">
    <h3>Mobil Uyum</h3>
    <p>CRM’inize her yerden, her zaman erişin.</p>
  </div>
</section>

<section id="about" class="hero" style="background: white;">
  <h2>Neden CRM Plus?</h2>
  <p>200.000'den fazla işletme, müşteri ilişkilerini yönetmek için CRM Plus’ı tercih ediyor. Kullanımı kolay arayüzü ve güçlü entegrasyonları ile işinizi ileriye taşıyın.</p>
</section>

<section id="basla" class="hero" style="background: #eef4ff;">
  <h2>Hemen Başlayın</h2>
  <p>14 günlük ücretsiz denemeyle CRM Plus farkını yaşayın.</p>
  <button class="btn" onclick="document.getElementById('talepFormu').scrollIntoView({ behavior: 'smooth' });">Denemeye Başla</button>
</section>

<!-- Talep Formu -->
<section id="talepFormu" class="hero" style="background: #fff;">
  <h2>CRM Plus Talep Formu</h2>
  <form action="talep_kaydet.php" method="POST">
    <input type="hidden" name="package_id" value="2"> <!-- CRM Plus ID -->
    <input type="text" name="name" placeholder="Adınız" required>
    <input type="email" name="email" placeholder="E-posta adresiniz" required>
    <input type="text" name="company_name" placeholder="Şirket Adınız" required>
    <textarea name="message" placeholder="Mesajınız (isteğe bağlı)" rows="4"></textarea>
    <button type="submit">Gönder</button>
  </form>
</section>

<footer>
  <p>&copy; 2025 CRM Plus Tanıtımı. Tüm Hakları Saklıdır.</p>
</footer>

</body>
</html>
