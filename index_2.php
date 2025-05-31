<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GEMA Universitas Negeri Padang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <header id="mainHeader">
      <img src="/image/LOGO UNP.png" alt="Unit Logo" class="header-logo">
      <img src="image/logo pure.png" alt="Unit Logo" class="header-logo">
      <a>Unit Kegiatan Universitas Negeri Padang</a>
  </header>
    <nav class ="navbar">
        <a href="home" class="active">Beranda</a>
        <a href="about">Pengumuman</a>
        <a href="services">Jelajahi UK</a>
        <a href="portofolio">Cari UK</a>
        <a href="contact">Kalender</a>
    </nav>
</header>

  <main>
    <!-- Search Section -->
    <section class="search-section">
      <h2>Temukan Unit Kegiatan Anda</h2>
      <input type="text" placeholder="Cari UKM atau kegiatan..." class="search-bar">
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
      <button class="arrow left">&lt;</button>
      <div class="cards-container">
        <!-- Repeat this card structure -->
        <div class="card">
          <h3>UK Infitech</h3>
          <p>Organisasi mahasiswa teknologi</p>
          <div class="icons">
            <span>🌐</span>
            <span>🐦</span>
            <span>📘</span>
          </div>
          <button class="detail-button">Lihat Detail</button>
        </div>
        <!-- End card -->
      </div>
      <button class="arrow right">&gt;</button>
    </section>

    <!-- Calendar and Announcements -->
    <section class="info-section">
      <div class="calendar">
        <h3>Kalender Kegiatan</h3>
        <div class="calendar-grid">
          <span>Sen</span> <span>Sel</span> <span>Rab</span> <span>Kamis</span> <span>Jum</span> <span>Sab</span>
          <!-- Example calendar cells -->
          <span></span><span></span><span></span><span>1</span><span>2</span>
          <!-- Add the rest of the days dynamically -->
        </div>
      </div>
      <div class="announcements">
        <h3>Pengumuman Terkini</h3>
        <ul>
          <li>Pendaftaran UKM Baru 2024 - <span>12 Mei 2024</span></li>
          <li>Workshop Leadership - <span>15 Mei 2024</span></li>
          <li>Kompetisi Inovasi - <span>20 Mei 2024</span></li>
        </ul>
      </div>
    </section>
  </main>

  <footer>
    <p>© Copyright 2025 - Unit Kegiatan Mahasiswa UNP. All Rights Reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
