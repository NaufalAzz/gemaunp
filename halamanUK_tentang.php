<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Unit Kegiatan Infinite Technologi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .border-left-custom {
      border-left-width: 3px;
      border-left-color: black;
      border-top-left-radius: 12px;
      border-bottom-left-radius: 12px;
    }

    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>

<body class="bg-gray-100">
  <!-- Top Bar -->
  <header class="bg-[#0078FF] flex justify-between items-center px-4 md:px-6 py-3 relative">
    <div class="flex items-center space-x-2">
      <a href="index2.php"><img src="image/LOGO UNP.png" class="w-8 h-8" alt="Logo UNP" /></a>
      <a href="index2.php"><img src="image/logo pure.png" class="w-8 h-8" alt="Logo Pure" /></a>
      <a href="index2.php" class="text-white font-semibold text-sm md:text-lg">GEMA Universitas Negeri Padang</a>
    </div>
    <div class="relative">
      <button id="menuButton"
        class="bg-[#0056cc] text-white text-sm md:text-base font-semibold px-4 py-2 rounded flex items-center">
        Menu <i class="fas fa-caret-down ml-1"></i>
      </button>
      <ul id="menuDropdown"
        class="hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg border border-gray-200 z-50">
        <li class="px-4 py-2 hover:bg-gray-100"><a href="index2.php">Beranda</a></li>
        <li class="px-4 py-2 hover:bg-gray-100">Unit Kegiatan</li>
        <li class="px-4 py-2 hover:bg-gray-100"><a href="kalender.php">Kalender</a></li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer"><a href="login.php">Ubah User</a></li>
      </ul>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section class="bg-white py-8 px-4 md:px-16">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center md:space-x-8">
        <div class="bg-white rounded-md shadow-md p-4 w-36 h-36 flex items-center justify-center mb-6 md:mb-0">
          <img src="image\Logo infitech.png" class="max-w-full max-h-full object-contain" alt="Infitech Logo" />
        </div>
        <div class="flex-1">
          <h1 class="text-[#005ea8] font-extrabold text-xl md:text-2xl leading-tight mb-2">Unit Kegiatan Infinite
            Technologi</h1>
          <p class="text-gray-600 text-sm md:text-base mb-4">Unit Kegiatan Mahasiswa Teknologi Informasi Universitas
            Negeri Padang</p>
          <div class="flex flex-wrap items-center space-x-4 text-gray-500 text-xs md:text-sm mb-4">
            <div class="flex items-center space-x-1"><i class="fas fa-users text-gray-400"></i><span>15+ Anggota</span>
            </div>
            <div class="flex items-center space-x-1"><i class="fas fa-clock text-gray-400"></i><span>Aktif sejak
                2019</span></div>
            <div class="flex items-center space-x-1"><i class="fas fa-award text-gray-400"></i><span>2+ Prestasi</span>
            </div>
          </div>
          <div class="flex flex-wrap gap-3">
            <a href="#"
              class="flex items-center space-x-2 rounded-md bg-[#F8F8F8] px-3 py-2 text-gray-600 text-xs md:text-sm hover:bg-gray-300"><i
                class="fab fa-instagram text-gray-500"></i><span>@infitech.unp</span></a>
            <a href="#"
              class="flex items-center space-x-2 rounded-md bg-[#F8F8F8] px-3 py-2 text-gray-600 text-xs md:text-sm hover:bg-gray-300"><i
                class="fab fa-facebook-f text-gray-500"></i><span>Infitech UNP</span></a>
            <a href="#"
              class="flex items-center space-x-2 rounded-md bg-[#F8F8F8] px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-300"><i
                class="fab fa-twitter text-gray-500"></i><span>@infitech_unp</span></a>
            <a href="#"
              class="flex items-center space-x-2 rounded-md bg-[#F8F8F8] px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-300"><i
                class="fab fa-youtube text-gray-500"></i><span>Infitech UNP</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Navigation Tabs -->
    <section class="w-full bg-white border-t border-gray-200">
      <nav class="max-w-7xl mx-auto px-4 md:px-16">
        <ul
          class="flex justify-start space-x-6 text-xs md:text-base font-normal text-black overflow-x-auto scrollbar-hide pt-4">
          <li class="border-b-2 border-black pb-3 cursor-pointer">Tentang</li>
          <li><a href="halamanUK_kegiatan.php" class="pb-2 cursor-pointer">Kegiatan</a></li>
          <li><a href="halamanUK_anggota.php" class="pb-2 cursor-pointer">Anggota</a></li>
          <li><a href="halamanUK_dokumentasi.php" class="pb-2 cursor-pointer">Dokumentasi</a></li>
          <li><a href="halamanUK_contact.php" class="pb-2 cursor-pointer">Kontak</a></li>
        </ul>
      </nav>
    </section>
    <!-- #region -->
    <!-- Content Section -->
    <main class="max-w-6xl mx-auto bg-white mt-6 rounded-md shadow-sm px-4 md:px-10 py-6 md:py-10">

      <section class="max-w-5xl text-gray-700 text-sm leading-relaxed text-justify">
        <h2 class="text-[#0055A4] font-semibold text-base md:text-lg mb-3">Tentang UK</h2>
        <p class="mb-4">Infinite Technology memiliki arti dari 2 kata nama Infinite Technology berasal dari kata yaitu
          "Infinite" dan "Technology", Yang mana Infinite berarti tanpa batas, sedangkan technology artinya teknologi.
          Sehingga Infinite Technology dapat diartikan sebagai kreativitas manusia yang tiada batas untuk terus
          berkarya.</p>

        <h3 class="text-[#0055A4] font-semibold mb-1">Visi</h3>
        <p class="mb-4">Menjadi Unit kegiatan Mahasiswa (UKM) yang membina Mahasiswa Universitas Negeri Padang (UNP)
          menjadi pribadi yang Unggul dan Profesional dalam bidang Informasi Teknologi (IT) yang dikembangkan atas dasar
          Iman dan Taqwa kepada Tuhan Yang Maha Esa</p>

        <h3 class="text-[#0055A4] font-semibold mb-1">Misi</h3>
        <div class="space-y-4">
          <p class="bg-[#f8f8f8] rounded-md p-4 border-l-4 border-black">Membina mahasiswa UNP sebagai insan akademis
            yang unggul dan profesional di bidang Informasi Teknologi dengan menjunjung nilai-nilai agama berdasarkan
            keimanan dan ketakwaan kepada Tuhan Yang Maha Esa</p>
          <p class="bg-[#f8f8f8] rounded-md p-4 border-l-4 border-black">Menjalin kerjasama lokal, nasional, dan
            internasional dalam bidang Informasi Teknologi</p>
          <p class="bg-[#f8f8f8] rounded-md p-4 border-l-4 border-black">Menyelenggarakan kegiatan di bidang Informasi
            Teknologi dalam meningkatkan wawasan ilmu pengetahuan baik pada tingkat Nasional maupun Internasional</p>
          <p class="bg-[#f8f8f8] rounded-md p-4 border-l-4 border-black">Menyelenggarakan kegiatan pengabdian kepada
            masyarakat di bidang Informasi Teknologi untuk kemajuan bangsa</p>
          <p class="bg-[#f8f8f8] rounded-md p-4 border-l-4 border-black">Menjuarai kompetisi tingkat Nasional dan
            Internasional di bidang Informasi Teknologi</p>
        </div>

        <h3 class="text-[#0055A4] font-semibold mt-8 mb-4">Divisi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-[#f8f8f8] rounded-md p-5">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">Web Development</h4>
            <p class="text-gray-600 text-xs">Pengembangan aplikasi web dengan teknologi modern</p>
          </div>
          <div class="bg-[#f8f8f8] rounded-md p-5">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">Mobile Development</h4>
            <p class="text-gray-600 text-xs">Pembuatan aplikasi mobile Android dan iOS</p>
          </div>
          <div class="bg-[#f8f8f8] rounded-md p-5">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">UI/UX Design</h4>
            <p class="text-gray-600 text-xs">Desain antarmuka dan pengalaman pengguna</p>
          </div>
          <div class="bg-[#f8f8f8] rounded-md p-5">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">Data Science</h4>
            <p class="text-gray-600 text-xs">Analisis data dan machine learning</p>
          </div>
        </div>

        <h3 class="text-[#0055A4] font-semibold mt-8 mb-4">Prestasi Terkini</h3>
        <div class="space-y-4 max-w-3xl">
          <div class="bg-[#f8f8f8] rounded-md p-5 border-left-custom">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">Hackathon Nasional 2023</h4>
            <p class="text-gray-600 text-xs">Juara 1 - Kategori Smart City Solution</p>
          </div>
          <div class="bg-[#f8f8f8] rounded-md p-5 border-left-custom">
            <h4 class="font-semibold text-[#0055A4] text-sm mb-1">Google Solution Challenge 2023</h4>
            <p class="text-gray-600 text-xs">Top 100 Global Projects</p>
          </div>
        </div>
      </section>
    </main>
  </main>

  <footer class="bg-[#0a8aff] text-white text-center py-4 mt-6">
    <p class="text-xs md:text-sm font-normal">© Copyright 2025 - Unit Kegiatan Infinite Technology UNP – All Rights
      Reserved.</p>
  </footer>

  <script>
    const menuButton = document.getElementById('menuButton');
    const menuDropdown = document.getElementById('menuDropdown');
    menuButton.addEventListener('click', () => {
      menuDropdown.classList.toggle('hidden');
    });
    window.addEventListener('click', (e) => {
      if (!menuButton.contains(e.target) && !menuDropdown.contains(e.target)) {
        menuDropdown.classList.add('hidden');
      }
    });
  </script>
</body>

</html>