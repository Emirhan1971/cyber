<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Santa Rust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Font (Orbitron) -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="icon.ico">

  <style>
    /*   Navbar Genel Yapısı */
    .sr-navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(20, 24, 28, 0.9);
      padding: 12px 24px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
      backdrop-filter: blur(6px);
      box-shadow: 0 2px 10px #0005;
    }

    /*   Logo Alanı */
    .sr-logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .sr-logo img {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 0 6px rgba(0, 255, 174, 0.4);
      transition: transform 0.2s ease;
    }

    .sr-logo img:hover {
      transform: scale(1.08);
    }

    .sr-title {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.3rem;
      font-weight: 800;
      color: #00ffae;
      text-shadow: 0 0 6px #00ffae88;
      display: flex;
      flex-direction: column;
    }

    .sr-subtitle {
      font-size: 0.65rem;
      color: #ccc;
      letter-spacing: 1px;
      font-weight: 400;
      margin-top: 2px;
    }

    /*   Menü Butonları */
    .sr-links {
      display: flex;
      gap: 18px;
    }

    .sr-link {
      color: #e0e0e0;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 6px;
      transition: all 0.2s;
      background-color: #2a2e33;
      font-weight: 500;
    }

    .sr-link:hover {
      background-color: #00ffae22;
      color: #fff;
      box-shadow: 0 0 8px #00ffae55;
    }

    /*   Hamburger Menü */
    .sr-hamburger {
      display: none;
      font-size: 28px;
      color: #00ffae;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .sr-links {
        display: none;
        position: absolute;
        top: 64px;
        right: 24px;
        background-color: rgba(20, 24, 28, 0.98);
        flex-direction: column;
        padding: 14px 18px;
        border-radius: 10px;
        gap: 10px;
        box-shadow: 0 4px 12px rgba(0,255,174,0.2);
      }

      .sr-links.active {
        display: flex;
      }

      .sr-hamburger {
        display: block;
      }
      
    }
  </style>
</head>

<body style="margin: 0; padding-top: 70px; background-color: #111;">

  <!-- ✅ Navbar -->
  <nav class="sr-navbar">
    <div class="sr-logo">
      <img src="logo.jpeg" alt="Santa Rust Logo" />
      <div class="sr-title">
        Santa Rust
        <div class="sr-subtitle">Bedwars • AimTrain • FFA</div>
      </div>
    </div>

    <div class="sr-hamburger" onclick="toggleSrMenu()">☰</div>

    <div class="sr-links" id="srMenu">
      <a href="home.php" class="sr-link">Home</a>
      <a href="vip.php" class="sr-link">VIP</a>
      <a href="vip_al.php" class="sr-link">VIP Alım</a>
    </div>
  </nav>

  <!-- Menü Açma-Kapatma JS -->
  <script>
    function toggleSrMenu() {
      document.getElementById("srMenu").classList.toggle("active");
    }
  </script>

</body>
</html>
