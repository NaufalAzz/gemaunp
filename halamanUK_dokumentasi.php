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
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    /* Custom border style */
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
          <a href="index2.php">Beranda</a>
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          Unit Kegiatan
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          <a href="kalender.php">Kalender</a>
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
    <!-- Hero -->
    <section class="bg-white py-8 px-4 md:px-16">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center md:space-x-8">
        <div class="bg-white rounded-md shadow-md p-4 w-36 h-36 flex items-center justify-center mb-6 md:mb-0">
          <img alt="Infitech Logo" class="max-w-full max-h-full object-contain"
            src="https://storage.googleapis.com/a1aa/image/07ad0b04-4ada-4448-882e-91b996bcec65.jpg" />
        </div>
        <div class="flex-1">
          <h1 class="text-[#005ea8] font-extrabold text-xl md:text-2xl leading-tight mb-2">
            Unit Kegiatan Infinite
            Technologi
          </h1>
          <p class="text-gray-600 text-sm md:text-base mb-4">
            Unit Kegiatan Mahasiswa Teknologi Informasi
            Universitas
            Negeri Padang
          </p>
          <div class="flex flex-wrap items-center space-x-4 text-gray-500 text-xs md:text-sm mb-4">
            <div class="flex items-center space-x-1">
              <i class="fas fa-users text-gray-400">
              </i>
              <span>
                15+
                Anggota
              </span>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fas fa-clock text-gray-400">
              </i>
              <span>
                Aktif sejak
                2019
              </span>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fas fa-award text-gray-400">
              </i>
              <span>
                2+
                Prestasi
              </span>
            </div>
          </div>
          <div class="flex flex-wrap gap-3">
            <a class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"
              href="#">
              <i class="fab fa-instagram text-gray-500">
              </i>
              <span>
                @infitech.unp
              </span>
            </a>
            <a class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"
              href="#">
              <i class="fab fa-facebook-f text-gray-500">
              </i>
              <span>
                Infitech UNP
              </span>
            </a>
            <a class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"
              href="#">
              <i class="fab fa-twitter text-gray-500">
              </i>
              <span>
                @infitech_unp
              </span>
            </a>
            <a class="flex items-center space-x-2 border border-gray-300 rounded-md px-3 py-1 text-gray-600 text-xs md:text-sm hover:bg-gray-100"
              href="#">
              <i class="fab fa-youtube text-gray-500">
              </i>
              <span>
                Infitech UNP
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Navigation Tabs -->
    <section class="w-full bg-white border-t border-gray-200">
      <nav class="max-w-7xl mx-auto px-4 md:px-16">
        <ul
          class="flex justify-start space-x-6 text-xs md:text-base font-normal text-black overflow-x-auto scrollbar-hide pt-4">
          <li>
            <a class="pb-2 cursor-pointer" href="halamanUK_tentang.php">
              Tentang
            </a>
          </li>
          <li>
            <a class="pb-2 cursor-pointer" href="halamanUK_kegiatan.php">
              Kegiatan
            </a>
          </li>
          <li>
            <a class="pb-2 cursor-pointer" href="halamanUK_anggota.php">
              Anggota
            </a>
          </li>
          <li class="border-b-2 border-black pb-3 cursor-pointer">
            Dokumentasi
          </li>
          <li>
            <a class="pb-2 cursor-pointer" href="halamanUK_contact.php">
              Kontak
            </a>
          </li>
        </ul>
      </nav>
    </section>
  </main>
  <div class="max-w-6xl mx-auto bg-white mt-6 rounded-md shadow-sm px-4 md:px-10 py-6 md:py-10">
    <section class="max-w-5xl text-gray-700 text-sm leading-relaxed text-justify">
      <div class="flex space-x-3 mb-6">
        <button class="year-button bg-[#0069E0] text-white text-sm  rounded px-4 py-2" data-year="2023" type="button">
          2023
        </button>
        <button class="year-button bg-gray-100 text-gray-700 text-sm rounded px-4 py-2" data-year="2022" type="button">
          2022
        </button>
        <button class="year-button bg-gray-100 text-gray-700 text-sm rounded px-4 py-2" data-year="2021" type="button">
          2021
        </button>
        <button class="year-button bg-gray-100 text-gray-700 text-sm rounded px-4 py-2" data-year="2020" type="button">
          2020
        </button>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" id="documentation-container">
        <article class="doc-item" data-year="2023">
          <img
            alt="Workshop Programming 2023 event banner showing a group of diverse young people coding on laptops in a modern classroom"
            class="rounded-md w-full object-cover" height="240"
            src="https://storage.googleapis.com/a1aa/image/f6a9b17e-4d85-4e1b-ec16-8c25f706eb2d.jpg" width="400" />
          <h3 class="text-[#004C8C] font-semibold mt-4 text-base leading-relaxed">
            Workshop Programming 2023
          </h3>
          <time class="block text-gray-600 text-sm leading-tight" datetime="2023-11-15">
            15 Nov 2023
          </time>
        </article>
        <article class="doc-item" data-year="2020">
          <img
            alt="Hackathon Event 2023 poster with teams collaborating intensely on coding projects in a vibrant tech space"
            class="rounded-md w-full object-cover" height="240"
            src="https://storage.googleapis.com/a1aa/image/47f4c9ed-199f-4cd7-f719-1b8e8f36e447.jpg" width="400" />
          <h3 class="text-[#004C8C] font-semibold mt-4 text-base leading-relaxed">
            Hackathon Event
          </h3>
          <time class="block text-gray-600 text-sm leading-tight" datetime="2023-10-20">
            20 Oct 2020
          </time>
        </article>
        <article class="doc-item" data-year="2022">
          <img
            alt="Seminar Teknologi 2022 banner showing a speaker presenting technology trends to an engaged audience in a conference hall"
            class="rounded-md w-full object-cover" height="240"
            src="https://storage.googleapis.com/a1aa/image/4ff99012-d8f9-4ded-199e-7e9ff1e32295.jpg" width="400" />
          <h3 class="text-[#004C8C] font-semibold mt-4 text-base leading-relaxed">
            Seminar Teknologi 2022
          </h3>
          <time class="block text-gray-600 text-sm leading-tight" datetime="2022-05-15">
            15 Mei 2022
          </time>
        </article>
        <article class="doc-item" data-year="2021">
          <img
            alt="Workshop AI 2021 event image showing participants learning artificial intelligence concepts with laptops and AI graphics"
            class="rounded-md w-full object-cover" height="240"
            src="https://storage.googleapis.com/a1aa/image/045a938f-2d38-4ac4-ba17-41ef15573878.jpg" width="400" />
          <h3 class="text-[#004C8C] font-semibold mt-4 text-base leading-relaxed">
            Workshop AI 2021
          </h3>
          <time class="block text-gray-600 text-sm leading-tight" datetime="2021-08-10">
            10 Agustus 2021
          </time>
        </article>
      </div>
    </section>
  </div>
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

    // Filter documentation by year
    const yearButtons = document.querySelectorAll('.year-button');
    const documentationContainer = document.getElementById('documentation-container');

    yearButtons.forEach(button => {
      button.addEventListener('click', () => {
        const selectedYear = button.getAttribute('data-year');

        // Update button styles
        yearButtons.forEach(btn => {
          btn.classList.remove('bg-[#0069E0]', 'text-white');
          btn.classList.add('bg-gray-100', 'text-gray-700');
        });
        button.classList.add('bg-[#0069E0]', 'text-white');
        button.classList.remove('bg-gray-100', 'text-gray-700');

        // Filter documentation items
        const items = documentationContainer.querySelectorAll('.doc-item');
        items.forEach(item => {
          if (item.getAttribute('data-year') === selectedYear) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>

</html>