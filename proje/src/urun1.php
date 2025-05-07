<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoho One Tanıtımı</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #008c99;
      --light: #e6faff;
      --white: #fff;
      --gray: #f4f6f8;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
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
      transition: opacity 0.2s ease;
    }

    nav ul li a:hover {
      opacity: 0.8;
    }

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(to right, var(--light), #ccf2f4);
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
      background-color: #006d77;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 40px;
    }

    .card {
      background: white;
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
      margin: 40px auto 20px;
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
    <h1>Zoho One</h1>
    <nav>
      <ul>
        <li><a href="#features">Özellikler</a></li>
        <li><a href="#about">Hakkında</a></li>
        <li><a href="#cta">Başla</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h2>İşinizi Tek Platformda Yönetin</h2>
    <p>Zoho One ile tüm iş süreçlerinizi entegre edin, kontrolü elinize alın.</p>
    <button class="btn" onclick="document.getElementById('talepFormu').scrollIntoView({ behavior: 'smooth' });">
      Hemen Başlayın
    </button>
  </section>

  <section id="features" class="features">
    <div class="card">
      <h3>Tümleşik Uygulamalar</h3>
      <p>CRM, muhasebe, İK, pazarlama ve daha fazlasını tek platformda birleştirin.</p>
    </div>
    <div class="card">
      <h3>Merkezi Yönetim</h3>
      <p>Kullanıcıları, rollerini ve tüm uygulamaları tek panelden yönetin.</p>
    </div>
    <div class="card">
      <h3>Güçlü Entegrasyon</h3>
      <p>Uygulamalar arası veri akışını otomatik hale getirerek zaman kazanın.</p>
    </div>
    <div class="card">
      <h3>Esnek Raporlama</h3>
      <p>Tüm sistemden gelen verileri analiz edip stratejik kararlar alın.</p>
    </div>
  </section>

  <section id="about" class="hero" style="background: white;">
    <h2>Neden Zoho One?</h2>
    <p>Zoho One, 45+ uygulamayı tek bir oturumla sunarak işletmenizi daha verimli hale getirir. Her ölçekteki işletmeye uyum sağlar.</p>
  </section>

  <section id="cta" class="hero">
    <h2>Zoho One'ı Deneyin</h2>
    <p>30 gün ücretsiz deneyin, işinizin her alanını dijitalleştirin.</p>
    <!-- Buton yukarıda var -->
  </section>

  <!-- 📩 Talep Formu -->
  <section id="talepFormu" class="hero" style="background: #fff;">
    <h2>Ürün Talep Formu</h2>
    <form action="talep_kaydet.php" method="POST">
      <input type="hidden" name="package_id" value="1">
      <input type="text" name="name" placeholder="Adınız" required>
      <input type="email" name="email" placeholder="E-posta adresiniz" required>
      <input type="text" name="company_name" placeholder="Şirket Adınız" required>
      <textarea name="message" placeholder="Mesajınız (isteğe bağlı)" rows="4"></textarea>
      <button type="submit">Gönder</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Zoho One Tanıtımı. Tüm Hakları Saklıdır.</p>
  </footer>

</body>
</html>
