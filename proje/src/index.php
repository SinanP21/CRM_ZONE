<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Paketleri | Ana Sayfa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<!-- 🤖 ChatBot kutusu -->
<div id="chat-toggle">🤖</div>
<div id="chat-box">
  <div id="chat-header">CRM Asistanı</div>
  <div id="chat-messages"></div>
  <div id="chat-input">
    <input type="text" id="chat-text" placeholder="Mesaj yazın...">
    <button id="chat-send">Gönder</button>
  </div>
</div>

<style>
  #chat-toggle {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #313a80;
    color: #fff;
    padding: 10px 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 20px;
    z-index: 9999;
  }

  #chat-box {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    width: 300px;
    background: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    z-index: 9999;
  }

  #chat-header {
    background: #313a80;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }

  #chat-messages {
    max-height: 250px;
    overflow-y: auto;
    padding: 10px;
    font-size: 14px;
  }

  #chat-input {
    display: flex;
    border-top: 1px solid #ccc;
  }

  #chat-input input {
    flex: 1;
    padding: 10px;
    border: none;
    outline: none;
  }

  #chat-input button {
    padding: 10px;
    background: #313a80;
    color: white;
    border: none;
    cursor: pointer;
  }

  .navbar-right {
  display: flex;
  align-items: center;
  gap: 20px;
  flex-wrap: nowrap; /* Bu kritik */
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #1e1b3a;
  padding: 15px 30px;
  flex-wrap: wrap;
  width: 100%;
}
.search-form {
  display: flex;
  align-items: center;
  background: white;
  border-radius: 20px;
  overflow: hidden;
  height: 30px;
}

.search-form input[type="text"] {
  border: none;
  padding: 0 8px;
  width: 130px;
  font-size: 14px;
}



</style>

<script>
  window.onload = function () {
    document.getElementById("chat-toggle").onclick = function () {
      const box = document.getElementById("chat-box");
      box.style.display = box.style.display === "none" ? "block" : "none";
    };

    document.getElementById("chat-send").onclick = function () {
      const input = document.getElementById("chat-text");
      const msg = input.value.trim();
      if (!msg) return;

      const messages = document.getElementById("chat-messages");
      messages.innerHTML += `<div><strong>Sen:</strong> ${msg}</div>`;
      input.value = '';

      fetch("chatbot.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ message: msg })
      })
      .then(res => res.json())
      .then(data => {
        messages.innerHTML += `<div><strong>Bot:</strong> ${data.reply}</div>`;
        messages.scrollTop = messages.scrollHeight;
      })
      .catch(() => {
        messages.innerHTML += `<div><strong>Bot:</strong> Hata oluştu.</div>`;
      });
    };
  };
</script>

<body>

<nav class="navbar">
  <div class="navbar-left">
    <div class="logo">CRM ZONE</div>
  </div>

  <div class="navbar-right">
    <ul class="nav-links">
      <li><a href="#urunlerimiz">Ürünlerimiz</a></li>
      <li><a href="#hakkimizda">Hakkımızda</a></li>
      <li><a href="#musteri-formu">Müşteri Formu</a></li>
      <li><a href="#iletisim">İletişime Geçin</a></li>
    </ul>
    <form action="arama.php" method="GET" class="search-form">
      <input type="text" name="q" placeholder="Ara...">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>

<div class="slideshow-container">
    <div class="slide fade">
        <img src="img/image1.png" alt="Slide 1">
    </div>
    <div class="slide fade">
        <img src="img/image2.png" alt="Slide 2">
    </div>
    <div class="slide fade">
        <img src="img/image3.png" alt="Slide 3">
    </div>
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>

<!-- 📦 Ürünlerimiz Bölümü - Dinamik PHP ile -->
<section id="urunlerimiz" class="section">
  <h2>Ürünlerimiz</h2>
  <div class="product-grid">
    <?php
    $stmt = $conn->query("SELECT * FROM packages");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // Her ürün için özel sayfa belirle
        switch ($row['id']) {
            case 1: $sayfa = "urun1.php"; break;
            case 2: $sayfa = "urun2.php"; break;
            case 3: $sayfa = "urun3.php"; break;
            case 4: $sayfa = "urun4.php"; break;
            default: $sayfa = "#"; break;
        }
        ?>
        <div class="product-card">
            <a href="<?= $sayfa ?>">
                <img src="img/<?= htmlspecialchars($row['image_path']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                <h3><?= htmlspecialchars($row['name']) ?></h3>             
            </a>
        </div>
        <?php
    }
    ?>
  </div>
</section>


<section id="hakkimizda">
    <h2 class="baslik">Hakkımızda</h2>
    <div class="group" data-aos="fade-up">
        <img src="img/image4.png" alt="crm" class="image">
        <div class="text">
            <div class="text-box" data-aos="fade-up">
                <h3>Vizyonumuz</h3>
                <p>Gelişen teknoloji ve değişen iş dünyası dinamiklerine uyum sağlayarak, müşterilerimizin dijitalleşme yolculuklarında ilham veren bir çözüm ortağı olmak...</p>
            </div>
        </div>
    </div>

    <div class="group" data-aos="fade-up">
        <div class="text">
            <div class="text-box" data-aos="fade-up">
                <h3>Misyonumuz</h3>
                <p>Müşterilerimizin iş süreçlerini daha verimli, daha hızlı ve daha kârlı hale getirmek için ihtiyaçlarına özel dijital çözümler geliştiriyoruz...</p>
            </div>
        </div>
        <img src="img/image5.png" alt="crm" class="image">
    </div>
</section>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ once: false });
</script>

<section id="musteri-formu" class="section">
    <h2>Müşteri Formu</h2>
    <form action="form_handler.php" method="POST" id="contactForm">
        <input type="text" name="name" placeholder="Adınız" required>
        <input type="email" name="email" placeholder="Email adresiniz" required>
        <textarea name="message" placeholder="Mesajınız" required></textarea>
        <button type="submit">Gönder</button>
    </form>
</section>

<section id="iletisim" style="background-color:#313a80;">
  <div class="map-container" data-aos="fade-up" style="color: white; text-align: center; padding: 40px 20px;">
    <h2>Bizi Ziyaret Edebilirsiniz</h2>
    <p class="contact-subtext">Quick Tower, Kozyatağı / İstanbul</p>
    
    <div class="map-embed" style="margin-top: 20px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.287875071868!2d29.098603315666957!3d40.97317927930325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac721a35a39d3%3A0xe2647a603cb8f008!2sQuick%20Tower!5e0!3m2!1str!2str!4v1715067267020!5m2!1str!2str"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <p class="map-link" style="margin-top: 15px;">
      <a href="https://www.google.com/maps/place/Quick+Tower,+Kozyata%C4%9F%C4%B1,+Umut+Sk.+No:10-12,+34752+Ata%C5%9Fehir%2F%C4%B0stanbul/"
         target="_blank" style="color: #fff; text-decoration: underline;">
        Haritada Aç
      </a>
    </p>
  </div>
</section>



<script src="script.js"></script>

</body>
</html>
