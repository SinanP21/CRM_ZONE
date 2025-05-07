<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Desk Tanıtımı</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
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
      background-color: #00a16c;
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
      background: linear-gradient(to right, #e5fdf5, #c1f7e6);
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
      background-color: #00a16c;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background-color: #007e56;
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
      color: #00a16c;
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
      background-color: #00a16c;
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
    <h1>Desk</h1>
    <nav>
      <ul>
        <li><a href="#features">Özellikler</a></li>
        <li><a href="#about">Hakkında</a></li>
        <li><a href="#cta">Başla</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h2>Müşteri Desteğinizi Güçlendirin</h2>
    <p>Zoho Desk ile destek süreçlerinizi merkezileştirin, müşteri memnuniyetini artırın.</p>
    <button class="btn" onclick="scrollToForm()">Ücretsiz Deneyin</button>
  </section>

  <section id="features" class="features">
    <div class="card">
      <h3>Bilet Yönetimi</h3>
      <p>Tüm müşteri taleplerini kolayca takip edin ve yönetin.</p>
    </div>
    <div class="card">
      <h3>Çok Kanallı Destek</h3>
      <p>E-posta, canlı sohbet, sosyal medya ve telefon desteği tek platformda.</p>
    </div>
    <div class="card">
      <h3>Yapay Zekâ Destekli Yardım</h3>
      <p>Zoho AI ile hızlı çözümler sunun, otomasyonları yönetin.</p>
    </div>
    <div class="card">
      <h3>Performans Raporları</h3>
      <p>Destek ekibinizin verimliliğini ölçün, iyileştirme alanlarını bulun.</p>
    </div>
  </section>

  <section id="about" class="hero" style="background: #fff;">
    <h2>Neden Desk?</h2>
    <p>Desk, destek ekiplerine ölçeklenebilir, sezgisel ve entegre çözümler sunar. Müşteri memnuniyetini artırmak için ideal bir yardım masası yazılımıdır.</p>
  </section>

  <section id="cta" class="hero">
    <h2>Desk'i Deneyin</h2>
    <p>15 gün ücretsiz deneyin, müşteri destek operasyonlarınızı dönüştürün.</p>
    <button class="btn" onclick="scrollToForm()">Hemen Başlayın</button>
  </section>

  <!-- 🧾 Talep Formu -->
  <section id="talepForm" class="hero" style="background: #ffffff;">
    <h2>Desk Talep Formu</h2>
    <form action="talep_kaydet.php" method="POST">
      <input type="hidden" name="package_id" value="3">
      <input type="text" name="name" placeholder="Adınız" required>
      <input type="email" name="email" placeholder="E-posta adresiniz" required>
      <input type="text" name="company_name" placeholder="Şirket Adı" required>
      <textarea name="message" placeholder="Mesajınız (isteğe bağlı)" rows="4"></textarea>
      <button type="submit">Gönder</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Desk Tanıtımı. Tüm Hakları Saklıdır.</p>
  </footer>

  <script>
    function scrollToForm() {
      document.getElementById("talepForm").scrollIntoView({ behavior: 'smooth' });
    }
  </script>

</body>
</html>
