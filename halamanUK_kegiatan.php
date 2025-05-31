<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>
    Unit Kegiatan Infinite Technologi
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;family=Poppins&amp;display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* Custom border style for the left black border with rounded corners */
    .border-left-custom {
      border-left-width: 3px;
      border-left-color: black;
      border-top-left-radius: 12px;
      border-bottom-left-radius: 12px;
    }
  </style>
</head>

<body class="bg-gray-100">
  <!-- Top Blue Bar -->
  <header class="bg-[#0078FF] flex justify-between items-center px-6 py-3 relative">
    <div class="flex items-center space-x-2">
      <a href="index2.php"><img alt="GEMA Universitas Negeri Padang logo, circular emblem with blue and yellow colors"
          class="w-8 h-8" height="32" src="image/LOGO UNP.png" width="32" /></a>
      <a href="index2.php"><img alt="GEMA Universitas Negeri Padang logo, circular emblem with blue and yellow colors"
          class="w-8 h-8" height="32" src="image/logo pure.png" width="32" /></a>
      <a href="index2.php">
        <span class="text-white font-semibold text-base md:text-lg">GEMA Universitas Negeri Padang</span>
      </a>
    </div>
    <div class="relative">
      <button aria-label="Menu"
        class="bg-[#0056cc] text-white text-sm md:text-base font-semibold px-4 py-2 rounded flex items-center"
        id="menuButton">
        Menu
        <i class="fas fa-caret-down ml-1">
        </i>
      </button>
      <ul class="hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg border border-gray-200 z-50"
        id="menuDropdown">
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          Beranda
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          Unit Kegiatan
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          Kalender
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          <a href="login.php">Ubah User</a>
        </li>
      </ul>
    </div>
  </header>
  <main>
    <!-- Main Content Container with full width background -->
    <main>
      <!-- Hero -->
      <section class="bg-white py-8 px-4 md:px-16">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center md:space-x-8">
          <div class="bg-white rounded-md shadow-md p-4 w-36 h-36 flex items-center justify-center mb-6 md:mb-0">
            <img src="https://storage.googleapis.com/a1aa/image/07ad0b04-4ada-4448-882e-91b996bcec65.jpg"
              class="max-w-full max-h-full object-contain" alt="Infitech Logo" />
          </div>
          <div class="flex-1">
            <h1 class="text-[#005ea8] font-extrabold text-xl md:text-2xl leading-tight mb-2">Unit Kegiatan Infinite
              Technologi</h1>
            <p class="text-gray-600 text-sm md:text-base mb-4">Unit Kegiatan Mahasiswa Teknologi Informasi Universitas
              Negeri Padang</p>
            <div class="flex flex-wrap items-center space-x-4 text-gray-500 text-xs md:text-sm mb-4">
              <div class="flex items-center space-x-1"><i class="fas fa-users text-gray-400"></i><span>15+
                  Anggota</span>
              </div>
              <div class="flex items-center space-x-1"><i class="fas fa-clock text-gray-400"></i><span>Aktif sejak
                  2019</span></div>
              <div class="flex items-center space-x-1"><i class="fas fa-award text-gray-400"></i><span>2+
                  Prestasi</span>
              </div>
            </div>
            <div class="flex flex-wrap gap-3">
              <a href="#"
                class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"><i
                  class="fab fa-instagram text-gray-500"></i><span>@infitech.unp</span></a>
              <a href="#"
                class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"><i
                  class="fab fa-facebook-f text-gray-500"></i><span>Infitech UNP</span></a>
              <a href="#"
                class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"><i
                  class="fab fa-twitter text-gray-500"></i><span>@infitech_unp</span></a>
              <a href="#"
                class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"><i
                  class="fab fa-youtube text-gray-500"></i><span>Infitech UNP</span></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Navigation Tabs -->
      <section class="w-full bg-white border-t border-gray-200">
        <nav class="max-w-7xl mx-auto px-4 md:px-16">
          <ul
            class="flex justify-start space-x-6 text-sm md:text-base font-normal text-black overflow-x-auto scrollbar-hide pt-4">
            <li><a href="halamanUK_tentang.php" class="pb-2 cursor-pointer">Tentang</a></li>
            <li class="border-b-2 border-black pb-3 cursor-pointer">Kegiatan</li>
            <li><a href="halamanUK_anggota.php" class="pb-2 cursor-pointer">Anggota</a></li>
            <li><a href="halamanUK_dokumentasi.php" class="pb-2 cursor-pointer">Dokumentasi</a></li>
            <li><a href="halamanUK_contact.php" class="pb-2 cursor-pointer">Kontak</a></li>
          </ul>
        </nav>
      </section>

      <!-- Container for the next section -->
      <div class="max-w-6xl mx-auto px-6 md:px-50">
        <section class="px-6 py-6 bg-white rounded-b-md mt-6">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h3 class="text-[#005ea8] font-extrabold text-xl md:text-2xl mb-4 md:mb-0">
              Kegiatan Mendatang
            </h3>
            <div class="flex flex-wrap gap-2" id="filterButtons">
              <button data-filter="all"
                class="filter-btn bg-[#005ea8] text-white text-xs md:text-sm font-semibold rounded px-4 py-2">
                Semua
              </button>
              <button data-filter="Workshop"
                class="filter-btn bg-white border border-gray-300 text-gray-600 text-xs md:text-sm font-normal rounded px-4 py-2 hover:bg-gray-100">
                Workshop
              </button>
              <button data-filter="Seminar"
                class="filter-btn bg-white border border-gray-300 text-gray-600 text-xs md:text-sm font-normal rounded px-4 py-2 hover:bg-gray-100">
                Seminar
              </button>
              <button data-filter="Competition"
                class="filter-btn bg-white border border-gray-300 text-gray-600 text-xs md:text-sm font-normal rounded px-4 py-2 hover:bg-gray-100">
                Kompetisi
              </button>
            </div>
          </div>
          <div class="bg-white rounded-md p-6 grid grid-cols-1 md:grid-cols-2 gap-6" id="eventsContainer">
            <!-- Card 1 -->
            <article data-type="Workshop"
              class="event-card bg-white rounded-md shadow border border-gray-200 overflow-hidden flex flex-col">
              <img alt="#" class="w-full object-cover" height="200" src="" width="600" />
              <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-3">
                  <h4 class="text-[#005ea8] font-extrabold text-lg leading-tight max-w-[70%]">
                    Workshop Web Development
                  </h4>
                  <span class="bg-[#005ea8] text-white text-xs font-semibold rounded px-3 py-1 whitespace-nowrap">
                    Workshop
                  </span>
                </div>
                <ul class="text-gray-600 text-xs md:text-sm space-y-1 flex-grow">
                  <li class="flex items-center space-x-2">
                    <i class="far fa-square">
                    </i>
                    <span>
                      25 Januari 2024
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-clock">
                    </i>
                    <span>
                      09:00 - 15:00 WIB
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt">
                    </i>
                    <span>
                      Aula Fakultas Teknik UNP
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-dot-circle">
                    </i>
                    <span>
                      Ahmad Fauzi (Senior Developer)
                    </span>
                  </li>
                </ul>
                <div class="flex justify-between items-center mt-3">
                  <p class="text-gray-700 text-xs md:text-sm font-semibold">
                    <span class="font-normal">
                      Deadline:
                    </span>
                    20 Januari 2024
                  </p>
                  <button class="bg-[#005ea8] text-white text-xs md:text-sm font-semibold rounded px-5 py-2">
                    Lihat Detail
                  </button>
                </div>
              </div>
            </article>
            <!-- Card 2 -->
            <article data-type="Seminar"
              class="event-card bg-white rounded-md shadow border border-gray-200 overflow-hidden flex flex-col">
              <img alt="#" class="w-full object-cover" height="200" src="" width="600" />
              <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-3">
                  <h4 class="text-[#005ea8] font-extrabold text-lg leading-tight max-w-[70%]">
                    Seminar UI/UX Design
                  </h4>
                  <span class="bg-[#005ea8] text-white text-xs font-semibold rounded px-3 py-1 whitespace-nowrap">
                    Seminar
                  </span>
                </div>
                <ul class="text-gray-600 text-xs md:text-sm space-y-1 flex-grow">
                  <li class="flex items-center space-x-2">
                    <i class="far fa-square">
                    </i>
                    <span>
                      15 Februari 2024
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-clock">
                    </i>
                    <span>
                      13:00 - 16:00 WIB
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt">
                    </i>
                    <span>
                      Google Meet
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-dot-circle">
                    </i>
                    <span>
                      Sarah Putri (UI/UX Designer)
                    </span>
                  </li>
                </ul>
                <div class="flex justify-between items-center mt-3">
                  <p class="text-gray-700 text-xs md:text-sm font-semibold">
                    <span class="font-normal">
                      Deadline:
                    </span>
                    10 Februari 2024
                  </p>
                  <button class="bg-[#005ea8] text-white text-xs md:text-sm font-semibold rounded px-5 py-2">
                    Lihat Detail
                  </button>
                </div>
              </div>
            </article>
            <!-- Card 3 -->
            <article data-type="Competition"
              class="event-card bg-white rounded-md shadow border border-gray-200 overflow-hidden flex flex-col">
              <img alt="#" class="w-full object-cover" height="200" src="" width="600" />
              <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-3">
                  <h4 class="text-[#005ea8] font-extrabold text-lg leading-tight max-w-[70%]">
                    Hackathon: Smart Campus Solution
                  </h4>
                  <span class="bg-[#005ea8] text-white text-xs font-semibold rounded px-3 py-1 whitespace-nowrap">
                    Competition
                  </span>
                </div>
                <ul class="text-gray-600 text-xs md:text-sm space-y-1 flex-grow">
                  <li class="flex items-center space-x-2">
                    <i class="far fa-square">
                    </i>
                    <span>
                      10 Maret 2024
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-clock">
                    </i>
                    <span>
                      08:00 - 20:00 WIB
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt">
                    </i>
                    <span>
                      Gedung Rektorat UNP
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-dot-circle">
                    </i>
                    <span>
                      Tim Juri dari Industry Partners
                    </span>
                  </li>
                </ul>
                <div class="flex justify-between items-center mt-3">
                  <p class="text-gray-700 text-xs md:text-sm font-semibold">
                    <span class="font-normal">
                      Deadline:
                    </span>
                    1 Maret 2024
                  </p>
                  <button class="bg-[#005ea8] text-white text-xs md:text-sm font-semibold rounded px-5 py-2">
                    Lihat Detail
                  </button>
                </div>
              </div>
            </article>
            <!-- Card 4 -->
            <article data-type="Workshop"
              class="event-card bg-white rounded-md shadow border border-gray-200 overflow-hidden flex flex-col">
              <img alt="#" class="w-full object-cover" height="200" src="" width="600" />
              <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-3">
                  <h4 class="text-[#005ea8] font-extrabold text-lg leading-tight max-w-[70%]">
                    Workshop Mobile App Development
                  </h4>
                  <span class="bg-[#005ea8] text-white text-xs font-semibold rounded px-3 py-1 whitespace-nowrap">
                    Workshop
                  </span>
                </div>
                <ul class="text-gray-600 text-xs md:text-sm space-y-1 flex-grow">
                  <li class="flex items-center space-x-2">
                    <i class="far fa-square">
                    </i>
                    <span>
                      5 April 2024
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-clock">
                    </i>
                    <span>
                      09:00 - 17:00 WIB
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt">
                    </i>
                    <span>
                      Lab Mobile Computing UNP
                    </span>
                  </li>
                  <li class="flex items-center space-x-2">
                    <i class="far fa-dot-circle">
                    </i>
                    <span>
                      Budi Santoso (Mobile Developer)
                    </span>
                  </li>
                </ul>
                <div class="flex justify-between items-center mt-3">
                  <p class="text-gray-700 text-xs md:text-sm font-semibold">
                    <span class="font-normal">
                      Deadline:
                    </span>
                    1 April 2024
                  </p>
                  <button class="bg-[#005ea8] text-white text-xs md:text-sm font-semibold rounded px-5 py-2">
                    Lihat Detail
                  </button>
                </div>
              </div>
            </article>
          </div>
        </section>
      </div>
    </main>
    <!-- Footer -->
    <footer class="bg-[#0a8aff] text-white text-center py-4 mt-6">
      <p class="text-white text-xs md:text-sm font-normal">
        © Copyright 2025 - Unit Kegiatan Infinite Technology UNP – All Rights Reserved.
      </p>
    </footer>
    <script>
      const menuButton = document.getElementById('menuButton');
      const menuDropdown = document.getElementById('menuDropdown');

      menuButton.addEventListener('click', () => {
        menuDropdown.classList.toggle('hidden');
      });

      // Close dropdown if clicked outside
      window.addEventListener('click', (e) => {
        if (!menuButton.contains(e.target) && !menuDropdown.contains(e.target)) {
          menuDropdown.classList.add('hidden');
        }
      });

      // Filter buttons logic
      const filterButtons = document.querySelectorAll('.filter-btn');
      const eventCards = document.querySelectorAll('.event-card');

      filterButtons.forEach(button => {
        button.addEventListener('click', () => {
          // Remove active styles from all buttons
          filterButtons.forEach(btn => {
            btn.classList.remove('bg-[#005ea8]', 'text-white', 'font-semibold');
            btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-600', 'font-normal', 'hover:bg-gray-100');
          });

          // Add active styles to clicked button
          button.classList.add('bg-[#005ea8]', 'text-white', 'font-semibold');
          button.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-600', 'font-normal', 'hover:bg-gray-100');

          const filter = button.getAttribute('data-filter');

          eventCards.forEach(card => {
            if (filter === 'all') {
              card.style.display = '';
            } else {
              if (card.getAttribute('data-type') === filter) {
                card.style.display = '';
              } else {
                card.style.display = 'none';
              }
            }
          });
        });
      });
    </script>
</body>

</html>