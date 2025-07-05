<!DOCTYPE html>
<!-- saved from url=(0082)https://gcdn.bionluk.com/uploads/message/edc6e01c-0433-41fb-9d57-1de8b196b4fd.html -->
<html lang="tr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>VIP Kitler - Santa Rust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./VIP Kitler - Santa Rust_files/css2" rel="stylesheet">
  <link rel="stylesheet" href="style/vip_style.css">
   <link rel="icon" type="image/png" href="icon.ico">
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="vip-badge-list">
    <div class="vip-badge" data-kit="hero">
      <img class="vip-img" src="resim/hero.png" alt="Hero">
      <div class="vip-durations">
        <button class="duration-btn active" data-kit="hero" data-idx="0">1 Ay</button>
        <button class="duration-btn" data-kit="hero" data-idx="1">3 Ay</button>
        <button class="duration-btn" data-kit="hero" data-idx="2">1 Yıl</button>
      </div>
      <div class="kit-price" id="price-hero">400 <span class="tl">TL</span></div>
      <button class="feature-btn" onclick="openModal(&#39;hero&#39;)">Özellikler</button>
      <a class="satinal-btn" id="satinal-hero" href="https://www.shopier.com/36893863" target="_blank">Satın Al</a>

    </div>
    <div class="vip-badge" data-kit="elite">
      <img class="vip-img" src="resim/elite.png" alt="Elite">
      <div class="vip-durations">
        <button class="duration-btn active" data-kit="elite" data-idx="0">1 Ay</button>
        <button class="duration-btn" data-kit="elite" data-idx="1">3 Ay</button>
        <button class="duration-btn" data-kit="elite" data-idx="2">1 Yıl</button>
      </div>
      <div class="kit-price" id="price-elite">600 <span class="tl">TL</span></div>
      <button class="feature-btn" onclick="openModal(&#39;elite&#39;)">Özellikler</button>
      <a class="satinal-btn" id="satinal-elite" href="https://www.shopier.com/36893894" target="_blank">Satın Al</a>
    </div>
    <div class="vip-badge" data-kit="legend">
      <img class="vip-img" src="resim/legend.png" alt="Legend">
      <div class="vip-durations">
        <button class="duration-btn active" data-kit="legend" data-idx="0">1 Ay</button>
        <button class="duration-btn" data-kit="legend" data-idx="1">3 Ay</button>
        <button class="duration-btn" data-kit="legend" data-idx="2">1 Yıl</button>
      </div>
      <div class="kit-price" id="price-legend">800 <span class="tl">TL</span></div>
      <button class="feature-btn" onclick="openModal(&#39;legend&#39;)">Özellikler</button>
    <a class="satinal-btn" id="satinal-legend" href="https://www.shopier.com/36893931" target="_blank">Satın Al</a>
    </div>
    <div class="vip-badge" data-kit="titan">
      <img class="vip-img" src="resim/titan.png" alt="Titan">
      <div class="vip-durations">
        <button class="duration-btn active" data-kit="titan" data-idx="0">1 Ay</button>
        <button class="duration-btn" data-kit="titan" data-idx="1">3 Ay</button>
        <button class="duration-btn" data-kit="titan" data-idx="2">1 Yıl</button>
      </div>
      <div class="kit-price" id="price-titan">1000 <span class="tl">TL</span></div>
      <button class="feature-btn" onclick="openModal(&#39;titan&#39;)">Özellikler</button>
      
<a class="satinal-btn" id="satinal-titan" href="https://www.shopier.com/36893947" target="_blank">Satın Al</a>
    </div>
  </div>
  <div class="overlay" id="overlayModal">
    <button class="close-btn" onclick="closeModal()">Geri</button>
    <img id="modalImg" src="titan.png"
      alt="Kit Görsel">
  </div>
  <script>
  // Fiyatlar
  const prices = {
    hero: [400, 1000, 2000],
    elite: [600, 1600, 3000],
    legend: [800, 2000, 4000],
    titan: [1000, 2500, 5000]
  };

  // Shopier Linkleri (senin verdiğin bağlantılar)
  const shopierLinks = {
    hero: [
      "https://www.shopier.com/36893863", // 1 Ay
      "https://www.shopier.com/36893874", // 3 Ay
      "https://www.shopier.com/36893881"  // 1 Yıl
    ],
    elite: [
      "https://www.shopier.com/36893894",
      "https://www.shopier.com/36893896",
      "https://www.shopier.com/36893902"
    ],
    legend: [
      "https://www.shopier.com/36893931",
      "https://www.shopier.com/36893923",
      "https://www.shopier.com/36893931"
    ],
    titan: [
      "https://www.shopier.com/36893947",
      "https://www.shopier.com/36893941",
      "https://www.shopier.com/36893947"
    ]
  };

  // Süre seçilince fiyat ve link güncelle
  document.querySelectorAll('.duration-btn').forEach(btn => {
    btn.onclick = () => {
      const kit = btn.dataset.kit;
      const idx = +btn.dataset.idx;
      const card = btn.closest('.vip-badge');

      // Buton aktifliği
      card.querySelectorAll('.duration-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Fiyatı güncelle
      const pe = card.querySelector('.kit-price');
      pe.innerHTML = `${prices[kit][idx]} <span class='tl'>TL</span>`;
      pe.classList.add('animate');
      setTimeout(() => pe.classList.remove('animate'), 300);

      // Satın Al butonu güncelle
      const satinalBtn = card.querySelector('.satinal-btn');
      satinalBtn.href = shopierLinks[kit][idx];

      // Konfeti efekti (isteğe bağlı)
      for (let j = 0; j < 6; j++) {
        const c = document.createElement('div');
        c.className = 'coin-confetti';
        c.style.setProperty('--x', `${Math.random() * 100 - 50}px`);
        c.style.setProperty('--y', `${Math.random() * -60 - 20}px`);
        pe.appendChild(c);
        setTimeout(() => c.remove(), 800);
      }
    };
  });

  // Özellik görseli açma (Modal)
  function openModal(kit) {
    document.getElementById('modalImg').src = `resim/${kit}_kit.png`;
    document.getElementById('overlayModal').style.display = 'flex';
  }

  function closeModal() {
    document.getElementById('overlayModal').style.display = 'none';
  }
</script>
</body>

</html>