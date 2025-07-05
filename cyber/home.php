<!DOCTYPE html>
<!-- saved from url=(0082)https://gcdn.bionluk.com/uploads/message/960bdbe5-61ac-4a4a-b2ae-a38bb292d0c4.html -->
<html lang="RUST"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Santa Rust</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/home_style.css">
   <link rel="icon" type="image/png" href="icon.ico">
</head>
<body>
  <?php include 'navbar.php' ?>
  <video id="main-bg-video" autoplay="" muted="" loop="" playsinline="">
    <source src="background.mp4" type="video/mp4">
  </video>
    
 
  <div id="server-info">
    <h2 id="w-name">RustReborn.gg EU - Bedwars | AimTrain | Creative | Arena | FFA</h2>
    <p id="w-players">Oyuncular: 1568/2000</p>
    <p id="w-ip">64.40.9.156:28017</p>
    <button id="copy-ip-btn">📋</button>
  </div>
  <script>
    const URL = 'https://api.codetabs.com/v1/proxy?quest='+encodeURIComponent('https://api.battlemetrics.com/servers/6803740');
    async function load(){ try{ const r=await fetch(URL); const d=(await r.json()).data.attributes; document.getElementById('w-name').textContent=d.name; document.getElementById('w-players').textContent='Oyuncular: '+d.players+'/'+d.maxPlayers; document.getElementById('w-ip').textContent=d.ip+':'+d.port; }catch{ document.getElementById('w-name').textContent='Veri alınamadı'; }}
    load(); setInterval(load,5000);
    document.getElementById('copy-ip-btn').addEventListener('click',()=>{ navigator.clipboard.writeText(document.getElementById('w-ip').textContent); document.getElementById('copy-ip-btn').textContent='✅'; setTimeout(()=>document.getElementById('copy-ip-btn').textContent='📋',2000); });
  </script>


</body></html>