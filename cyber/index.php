<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Santa Rust Açılıyor...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
   <link rel="icon" type="image/png" href="icon.ico">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      width: 100%;
      background-color: #0f0f0f;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: 'Orbitron', sans-serif;
      overflow: hidden;
    }

    /* Logo */
    .logo-container {
      animation: growLogo 2.5s ease-out forwards;
    }

    .logo-container img {
      width: 80px;
      height: 80px;
      opacity: 0.9;
      border-radius: 50%;
      box-shadow: 0 0 20px #00ffaeaa;
      animation: pulse 2.5s ease-in-out infinite;
    }

    @keyframes growLogo {
      0% {
        transform: scale(0.3);
        opacity: 0;
      }
      50% {
        transform: scale(1.2);
        opacity: 1;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 20px #00ffae66;
      }
      50% {
        transform: scale(1.1);
        box-shadow: 0 0 30px #00ffaeaa;
      }
    }

    /* Neon Yazı */
    .neon-text {
      margin-top: 30px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .neon-letter {
      font-size: clamp(1.4rem, 6vw, 2.8rem);
      color: #00ffae;
      text-shadow: 0 0 5px #00ffae, 0 0 10px #00ffae, 0 0 20px #00ffae;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.6s forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Logo -->
  <div class="logo-container">
    <img src="logo.jpeg" alt="Santa Rust Logo">
  </div>

  <!-- Neon Yazı -->
  <div class="neon-text" id="neonText"></div>

  <script>
    // Harf harf "Santa Rust" yazısını ekle
    const text = "SANTA  RUST";
    const neonText = document.getElementById("neonText");

    text.split("").forEach((char, i) => {
      const span = document.createElement("span");
      span.className = "neon-letter";
      span.style.animationDelay = `${0.25 * i}s`;
      span.textContent = char;
      neonText.appendChild(span);
    });

    // Sayfayı yönlendir
    setTimeout(() => {
      window.location.href = "home.php"; // Gitmek istediğin sayfa burası
    }, 4000); // 4 saniye sonra yönlendirme
  </script>

</body>
</html>
