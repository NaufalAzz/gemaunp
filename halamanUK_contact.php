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
  <!-- Cheat footer grounding -->
  <div class="grid grid-cols-1 gap-0 grid-rows-[1fr_auto] h-full">

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
            <a href="login.php">
              Ubah User
            </a>
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
              <p class="text-gray-600 text-sm md:text-base mb-4">Unit Kegiatan Mahasiswa Teknologi Informasi
                Universitas
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
              class="flex justify-start space-x-6 text-xs md:text-base font-normal text-black overflow-x-auto scrollbar-hide pt-4">
              <li><a href="halamanUK_tentang.php" class="pb-2 cursor-pointer">Tentang</a></li>
              <li><a href="halamanUK_kegiatan.php" class="pb-2 cursor-pointer">Kegiatan</a></li>
              <li><a href="halamanUK_anggota.php" class="pb-2 cursor-pointer">Anggota</a></li>
              <li><a href="halamanUK_dokumentasi.php" class="pb-2 cursor-pointer">Dokumentasi</a></li>
              <li class="border-b-2 border-black pb-3 cursor-pointer">Kontak</li>
            </ul>
          </nav>
        </section>
        <!-- Contact Section -->
        <section aria-label="Contact section"
          class="mt-6 bg-white rounded-lg p-6 grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-[1200px] w-full mx-auto shadow">

          <div>
            <h2 class="text-[#0055A4] font-semibold text-[18px]  mb-4">
              Kirim Pesan
            </h2>
            <form class="space-y-3">
              <input
                class="w-full border border-gray-200 rounded px-3 py-3 text-xs sm:text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#004A8F]"
                placeholder="Nama" type="text" />
              <input
                class="w-full border border-gray-200 rounded px-3 py-3 text-xs sm:text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#004A8F]"
                placeholder="Email" type="email" />
              <textarea
                class="w-full border border-gray-200 rounded px-3 py-2 text-xs sm:text-sm text-black-500 placeholder-gray-400 resize-none focus:outline-none focus:ring-1 focus:ring-[#004A8F]"
                placeholder="" rows="12"></textarea>
              <button
                class="w-full bg-[#0055A4] hover:bg-[#004080] hover:shadow-lg text-white text-xs sm:text-sm font-normal py-4 rounded transition duration-300"
                type="submit">
                Kirim Pesan
              </button>
            </form>
          </div>
          <div>
            <h2 class="text-[#0055A4] font-semibold text-[18px]  mb-4">
              Kontak Kami
            </h2>
            <ul class="space-y-3">
              <li>
                <label
                  class="flex items-center space-x-3 bg-[#f8f8f8] rounded  px-3 py-4 text-xs sm:text-sm text-[#666666] cursor-pointer select-none">
                  <input class="w-4 h-4 text-[#004A8F] border-gray-300 rounded" type="checkbox" />
                  <span>
                    contact@infitech-unp.ac.id
                  </span>
                </label>
              </li>
              <li>
                <label
                  class="flex items-center space-x-3 bg-[#f8f8f8] rounded  px-3 py-4 text-xs sm:text-sm text-[#666666] cursor-pointer select-none">
                  <input class="w-4 h-4 text-[#004A8F] border-gray-300 rounded" type="checkbox" />
                  <span>
                    @infitech.unp
                  </span>
                </label>
              </li>
              <li>
                <label
                  class="flex items-center space-x-3 bg-[#f8f8f8] rounded  px-3 py-4 text-xs sm:text-sm text-[#666666] cursor-pointer select-none">
                  <input class="w-4 h-4 text-[#004A8F] border-gray-300 rounded" type="checkbox" />
                  <span>
                    +62 812-3456-7890 (Admin)
                  </span>
                </label>
              </li>
            </ul>
          </div>
        </section>
      </main>
      <div>
        <!-- Footer -->
        <footer class="bg-[#0a8aff] text-white text-center py-4 mt-6">
          <p class="text-white text-xs md:text-sm font-normal">
            © Copyright 2025 - Unit Kegiatan Infinite Technology UNP – All Rights Reserved.
          </p>
        </footer>
      </div>
  </div>

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
</body>

</html>