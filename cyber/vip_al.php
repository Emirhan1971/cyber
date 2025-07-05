<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <title>Santa Rust | VIP Alım</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font ve ikonlar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-SOMEHASH" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/talep_style.css">
   <link rel="icon" type="image/png" href="icon.ico">
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- Arka Plan Videosu -->
  <video id="main-bg-video" autoplay muted loop playsinline>
    <source src="background.mp4" type="video/mp4">
  </video>

  <!-- Başlık -->
  <div class="main-title-container">
    <div class="main-title">VIP ALIM FORMU</div>
  </div>

  <!-- Form Alanı -->
  <div class="talep-card">
    <h2><i class="fa-solid fa-crown"></i> VIP Satın Al</h2>
    <form id="vipForm">
      <div class="form-group">
        <label for="steamId">Steam64 ID</label>
        <input type="text" id="steamId" name="steamId" placeholder="Steam64 ID’nizi yazın" required>
      </div>
      <div class="form-group">
        <label for="shopier">Shopier Sipariş Numarası</label>
        <input type="text" id="shopier" name="shopier" placeholder="Shopier sipariş numarasını yazın" required>
      </div>
      <button class="talep-btn" type="submit">
        <i class="fa-solid fa-paper-plane"></i> VIP Kaydını Gönder
      </button>
    </form>
  </div>

  <!-- Script -->
  <script>
    const DISCORD_WEBHOOK_URL = "WEBHOOK_BURAYA"; // Webhook adresini buraya yaz

    document.getElementById("vipForm").onsubmit = async function (e) {
      e.preventDefault();
      const steamId = document.getElementById("steamId").value.trim();
      const shopier = document.getElementById("shopier").value.trim();

      if (DISCORD_WEBHOOK_URL !== "WEBHOOK_BURAYA") {
        try {
          await fetch(DISCORD_WEBHOOK_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
              content: `🎟️ Yeni VIP Alımı:
Steam64 ID: ${steamId}
Shopier Sipariş No: ${shopier}`
            })
          });
        } catch (err) {
          console.error("Discord'a gönderilemedi:", err);
        }
      }

      alert("VIP kaydınız başarıyla gönderildi!");
      document.getElementById("vipForm").reset();
    };
  </script>
</body>
</html>
