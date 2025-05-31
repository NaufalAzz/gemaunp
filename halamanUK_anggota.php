<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>
    Unit Kegiatan Infinite Technologi
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
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

    .highlight {
      background-color: #ffe58a;
      border-radius: 0.25rem;
      padding: 0 0.15rem;
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
        <span class="text-white font-semibold text-base md:text-lg">
          GEMA Universitas Negeri Padang
        </span>
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
            <li><a href="halamanUK_kegiatan.php" class="pb-2 cursor-pointer">Kegiatan</a></li>
            <li class="border-b-2 border-black pb-3 cursor-pointer">Anggota</li>
            <li><a href="halamanUK_dokumentasi.php" class="pb-2 cursor-pointer">Dokumentasi</a></li>
            <li><a href="halamanUK_contact.php" class="pb-2 cursor-pointer">Kontak</a></li>
          </ul>
        </nav>
      </section>
      <!-- Container for the next section -->
      <div class="max-w-7xl mx-auto px-6 md:px-50">
        <section class="p-6 bg-white rounded-md mt-6">
          <!-- Main Content -->
          <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <section aria-label="Pengurus Inti" class="mb-12">
              <!-- Search box -->
              <div class="mb-6">
                <input type="text" id="searchInput" placeholder="Cari anggota..."
                  class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-8" />
              </div>


              <!-- Heading -->
              <h2 class="text-center text-xl font-bold text-[#1565d8] mb-8">Pengurus Inti</h2>

              <!-- Layout: Top (1 item center), Bottom (3 items) -->
              <div class="flex flex-col items-center gap-8">

                <!-- Ketua di tengah -->
                <div class="flex justify-center">
                  <div
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Fitri Waldi">

                    <img alt="Foto Ketua" class="w-24 h-24 rounded-full object-cover mb-3"
                      src="https://storage.googleapis.com/a1aa/image/8097c9cf-c203-473f-7b64-1fa9c2732a89.jpg" />
                    <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Fitri Waldi</p>
                    <p class="text-center text-xs text-gray-500 leading-tight">Ketua UKM</p>
                    <p class="text-center text-xs text-gray-400 leading-tight">2022 - 2023</p>
                  </div>
                </div>

                <!-- Barisan 3 orang bawah -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                  <!-- Wakil Ketua -->
                  <div
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg "
                    data-name="Indra Maulana Oktisidi">
                    <img alt="Foto Wakil" class="w-24 h-24 rounded-full object-cover mb-3"
                      src="https://storage.googleapis.com/a1aa/image/d12b2886-2c54-400b-617d-44a5b4f63964.jpg" />
                    <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Indra Maulana
                      Oktisidi</p>
                    <p class="text-center text-xs text-gray-500 leading-tight">Wakil Ketua</p>
                    <p class="text-center text-xs text-gray-400 leading-tight">2022 - 2023</p>
                  </div>

                  <!-- Sekretaris -->
                  <div
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Erpiana">
                    <img alt="Foto Sekretaris" class="w-24 h-24 rounded-full object-cover mb-3"
                      src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg" />
                    <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Erpiana</p>
                    <p class="text-center text-xs text-gray-500 leading-tight">Sekretaris</p>
                    <p class="text-center text-xs text-gray-400 leading-tight">2022 - 2023</p>
                  </div>

                  <!-- Bendahara -->
                  <div
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Puti Raissa Razani">
                    <img alt="Foto Bendahara" class="w-24 h-24 rounded-full object-cover mb-3"
                      src="https://storage.googleapis.com/a1aa/image/7b947e36-1f23-44da-ff21-4aae6ffc2077.jpg" />
                    <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Puti Raissa
                      Razani
                    </p>
                    <p class="text-center text-xs text-gray-500 leading-tight">Bendahara</p>
                    <p class="text-center text-xs text-gray-400 leading-tight">2025 - 2026</p>
                  </div>
                </div>
            </section>

            <!-- Divisi Web Development -->
            <section aria-label="Divisi Web Development" class="mb-12 max-w-md">
              <h3 class="text-m font-semibold text-[#0055A4] mb-4">
                Divisi Web Development
              </h3>
              <!-- Reza Pradana-->
              <div class="space-y-4">
                <div
                  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                  data-name="Reza Pradana">
                  <img alt="Foto Wakil" class="w-24 h-24 rounded-full object-cover mb-3"
                    src="https://storage.googleapis.com/a1aa/image/d12b2886-2c54-400b-617d-44a5b4f63964.jpg" />
                  <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Reza Pradana</p>
                  <p class="text-center text-xs text-gray-500 leading-tight">Ketua Divisi Web</p>
                  <p class="text-center text-xs text-gray-400 leading-tight">2023 - 2024</p>
                </div>
                <div class="flex space-x-4 text-xs text-gray-600">
                  <!-- Andi Putra -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Andi Putra">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Andi" class="w-12 h-12 rounded-full object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Andi Putra</p>
                      <p class="leading-tight">Staff Web Dev</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                  <!-- Nina Safira -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Nina Safira">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Nina" class="w-12 h-12 rounded-full object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Nina Safira</p>
                      <p class="leading-tight">Staff Web Dev</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Divisi Mobile Development -->
            <section aria-label="Divisi Mobile Development" class="mb-12 max-w-md">
              <h3 class="text-m font-semibold text-[#0055A4] mb-4">
                Divisi Mobile Development
              </h3>
              <!--Maya Sari-->
              <div class="space-y-4">
                <div
                  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                  data-name="Maya Sari">
                  <img alt="Foto Wakil" class="w-24 h-24 rounded-lg object-cover mb-3"
                    src="https://storage.googleapis.com/a1aa/image/d12b2886-2c54-400b-617d-44a5b4f63964.jpg" />
                  <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Maya Sari</p>
                  <p class="text-center text-xs text-gray-500 leading-tight">Ketua Divisi Mobile</p>
                  <p class="text-center text-xs text-gray-400 leading-tight">2023 - 2024</p>
                </div>
                <div class="flex space-x-4 text-xs text-gray-600">
                  <!-- Rizki Ramadhan -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Rizki Ramadhan">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Rizki" class="w-12 h-12 rounded-lg object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Rizki Ramadhan</p>
                      <p class="leading-tight">Staff Mobile Dev</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                  <!-- Putri Anisa -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Putri Anisa">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Putri" class="w-12 h-12 rounded-lg object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Putri Anisa</p>
                      <p class="leading-tight">Staff Mobile Dev</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Divisi UI/UX Design -->
            <section aria-label="Divisi UI/UX Design" class="max-w-md">
              <h3 class="text-m font-semibold text-[#0055A4] mb-4">
                Divisi UI/UX Design
              </h3>
              <!-- Fajar Hidayat -->
              <div class="space-y-4">
                <div
                  class="flex flex-col items-center bg-white border border-gray-200 rounded-lg p-4 w-40 shadow transition transform hover:scale-105 hover:shadow-lg"
                  data-name="Fajar Hidayat">
                  <img alt="Foto Ketua" class="w-24 h-24 rounded-lg object-cover mb-3"
                    src="https://storage.googleapis.com/a1aa/image/d12b2886-2c54-400b-617d-44a5b4f63964.jpg" />
                  <p class="text-center text-sm font-semibold text-blue-700 leading-tight name-text">Fajar Hidayat</p>
                  <p class="text-center text-xs text-gray-500 leading-tight">Ketua Divisi UI/UX</p>
                  <p class="text-center text-xs text-gray-400 leading-tight">2023 - 2024</p>
                </div>
                <div class="flex space-x-4 text-xs text-gray-600">
                  <!-- Diana Putri -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Diana Putri">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Diana" class="w-12 h-12 rounded-lg object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Diana Putri</p>
                      <p class="leading-tight">Staff UI/UX</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                  <!-- Arif Rahman -->
                  <div
                    class="flex items-center bg-white border border-gray-200 rounded-lg p-3 w-64 shadow transition transform hover:scale-105 hover:shadow-lg"
                    data-name="Arif Rahman">
                    <img src="https://storage.googleapis.com/a1aa/image/6a3f4122-bb6a-4062-9756-bf96977d006b.jpg"
                      alt="Foto Arif" class="w-12 h-12 rounded-lg object-cover mr-4" />
                    <div class="text-left">
                      <p class="font-semibold text-blue-600 leading-tight name-text">Arif Rahman</p>
                      <p class="leading-tight">Staff UI/UX</p>
                      <p class="text-gray-400 leading-tight">2023 - 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
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

      const searchInput = document.getElementById("searchInput");
      const cards = document.querySelectorAll("[data-name]");

      // Function to escape special characters for RegExp
      function escapeRegExp(string) {
        return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
      }

      searchInput.addEventListener("input", function () {
        const keyword = this.value.toLowerCase();
        cards.forEach((card) => {
          const name = card.getAttribute("data-name");
          const nameTextElem = card.querySelector(".name-text");
          if (!nameTextElem) return;

          if (keyword === "") {
            card.style.display = "flex";
            // Reset name text to original
            nameTextElem.innerHTML = name;
          } else {
            if (name.toLowerCase().includes(keyword)) {
              card.style.display = "flex";
              // Highlight matched part(s)
              const regex = new RegExp(`(${escapeRegExp(keyword)})`, "gi");
              const highlightedName = name.replace(regex, '<span class="highlight">$1</span>');
              nameTextElem.innerHTML = highlightedName;
            } else {
              card.style.display = "none";
              // Reset name text to original in case it was highlighted before
              nameTextElem.innerHTML = name;
            }
          }
        });
      });

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