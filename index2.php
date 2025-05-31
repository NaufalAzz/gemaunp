<?php

// Menentukan konten sebagai JSON
header('Content-Type: application/json');

// Mengecek apakah method request adalah GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $response = array(
    'message' => 'Hello, World!'
  );
  echo json_encode($response); // Mengembalikan respons JSON
} else {
  http_response_code(405); // Method Not Allowed
  echo json_encode(array('error' => 'Method Not Allowed'));
}
?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>
    Beranda | GEMA UNP
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-[#f8fafc] min-h-screen flex flex-col">
  <!-- Navbar -->
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
          <a href="kalender.php">Kalender</a>
        </li>
        <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
          <a href="login.php">Ubah User</a>
        </li>
      </ul>
    </div>
  </header>
  <!-- Main content container -->
  <main class="flex-grow rounded-t-lg mt-2 mx-2 sm:mx-4 md:mx-8 lg:mx-12 xl:mx-20 p-6">
    <!-- Landing Page Section -->
    <section class="bg-white p-12 shadow-md rounded-md mx-auto">

      <h1 class="text-center text-[#0055A4] font-extrabold text-4xl md:text-[50px] mb-6 select-none ">
        Temukan Unit Kegiatan Anda
      </h1>

      <!-- Search input -->
      <div class="flex justify-center mb-6">
        <div class="w-full max-w-6xl ">
          <label class="sr-only" for="search">
            Cari UKM atau kegiatan...
          </label>
          <div class="relative text-gray-400 focus-within:text-gray-600">
            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
              <i class="fas fa-search text-[#0055A4] text-sm">
              </i>
            </div>
            <input
              class="block w-full rounded border border-gray-300 bg-white py-3 pl-9 pr-3 text-xs placeholder-gray-400 focus:border-[#1565d8] focus:ring-1 focus:ring-[#1565d8] focus:outline-none"
              id="search" name="search" placeholder="Cari UKM atau kegiatan..." type="search" />
          </div>
        </div>
      </div>
      <!-- Pagination dots -->
      <div class="flex justify-center space-x-2 mb-6" id="paginationDots">
        <span class="w-2.5 h-2.5 rounded-full bg-[#1565d8] cursor-pointer" data-index="0">
        </span>
        <span class="w-2.5 h-2.5 rounded-full bg-gray-300 cursor-pointer" data-index="1">
        </span>
        <span class="w-2.5 h-2.5 rounded-full bg-gray-300 cursor-pointer" data-index="2">
        </span>
        <span class="w-2.5 h-2.5 rounded-full bg-gray-300 cursor-pointer" data-index="3">
        </span>
        <span class="w-2.5 h-2.5 rounded-full bg-gray-300 cursor-pointer" data-index="4">
        </span>
      </div>
      <!-- Cards slider container -->
      <div class="relative max-w-7xl mx-auto">
        <div class="overflow-hidden">
          <div class="flex transition transform " id="cardsSlider">
            <!-- Each slide contains 6 cards -->
            <!-- Slide 1 -->
            <div
              class="flex-shrink-0 w-full grid grid-cols-1 h-full  max-h-80  md:max-h-screen  overflow-y-auto md:overflow-hidden sm:grid-cols-2 md:grid-cols-3 gap-6 transition-transform  duration-500 ease-in-out">
              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.php"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.html"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.html"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.html"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.html"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

              <div class="bg-white rounded-md border border-gray-200 p-5 shadow-sm">
                <div class="flex items-center space-x-2 mb-2">
                  <img alt="UK Infitech logo, small rectangular blue text logo"
                    class="w-16 h-16 rounded-lg object-contain mr-4" src="image/Logo Infitech.png" width="40"
                    height="12" />
                  <div>
                    <h2 class="text-[#1565d8] font-semibold text-[16px] select-none">
                      UK Infitech
                    </h2>
                    <p class="text-gray-500 text-[14px] select-none">
                      Organisasi mahasiswa teknologi
                    </p>
                  </div>
                </div>

                <!-- Garis pembatas -->
                <hr class="border-gray-300 mb-7" />

                <div class="flex space-x-6 text-black-600 text-[35px] mb-7 justify-center">
                  <a aria-label="Website" class="hover:text-[#1565d8]" href="#">
                    <i class="fas fa-globe">
                    </i>
                  </a>
                  <a aria-label="Instagram" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a aria-label="Twitter" class="hover:text-[#1565d8]" href="#">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                </div>
                <a href="halamanUK_tentang.php"
                  class="w-full inline-block text-center bg-[#0088FF] text-white text-[16px] font-semibold py-2.5 rounded hover:bg-[#0d47a1] focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]">
                  Lihat Detail
                </a>

              </div>

            </div>

          </div>
        </div>
        <!-- Left arrow -->
        <button aria-label="Previous"
          class="absolute top-1/2 -left-20 md:-left-40 -translate-y-1/2 bg-[#0088FF] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]"
          id="prevArrow">
          <i class="fas fa-arrow-left text-[20px]"></i>
        </button>

        <!-- Right arrow -->
        <button aria-label="Next"
          class="absolute md:absolute  top-1/2 -right-20 md:-right-40 -translate-y-1/2 bg-[#0088FF] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-[#1565d8]"
          id="nextArrow">
          <i class="fas fa-arrow-right text-[20px]"></i>
        </button>

      </div>
      </div>

    </section>
    <!-- Kalender Kegiatan & Pengumuman Terkini Section -->
    <section class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 mt-12">
      <!-- Kalender Kegiatan -->
      <article aria-label="Kalender Kegiatan" class="bg-white rounded-lg p-6 pt-2 w-full md:w-1/2 shadow-sm">
        <h2 class="text-[#0055A4] font-extrabold text-[24px] mb-3">Kalender Kegiatan</h2>
        <!-- Garis pembatas -->
        <hr class="border-gray-300 mb-4" />
        <div class="flex items-center justify-center text-[#333333] text-sm font-medium mb-4 select-none">
          <button id="prevMonth" aria-label="Previous month" class="focus:outline-none">
            <i class="fas fa-chevron-left"></i>
          </button>
          <span id="currentMonth" class="mx-4 text-[18px] font-semibold"></span>
          <button id="nextMonth" aria-label="Next month" class="focus:outline-none">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div class="grid grid-cols-7 gap-1 text-center text-[16px] text-[#6b7280] font-normal select-none mb-2">
          <div>Min</div>
          <div>Sen</div>
          <div>Sel</div>
          <div>Rab</div>
          <div>Kam</div>
          <div>Jum</div>
          <div>Sab</div>
        </div>
        <!-- Kalender dirender di sini -->
        <div id="calendarDates" class="grid grid-cols-7 gap-1 text-center text-lg text-[#374151] font-normal"></div>
      </article>
      <!-- Pengumuman Terkini -->
      <article aria-label="Pengumuman Terkini" class="bg-white rounded-lg p-6 w-full md:w-1/2 shadow-sm">
        <h2 class="text-[#0055A4] font-semibold text-[24px] mb-4">
          Pengumuman Terkini
        </h2>
        <!-- Garis pembatas -->
        <hr class="border-gray-300 mb-10" />
        <div class="space-y-6 text-x text-[#0055A4] font-regular">
          <div>
            <a class="hover:underline cursor-pointer" href="#" data-date="2025-05-12">
              Pendaftaran UKM Baru 2025
            </a>
            <p class="text-[#6b7280] mt-1">
              12 Mei 2025
            </p>
            <hr class="border-t border-[#e5e7eb] mt-4" />
          </div>
          <div>
            <a class="hover:underline cursor-pointer" href="#" data-date="2025-05-15">
              Workshop Leadership
            </a>
            <p class="text-[#6b7280] mt-1">
              15 Mei 2024
            </p>
            <hr class="border-t border-[#e5e7eb] mt-4" />
          </div>
          <div>
            <a class="hover:underline cursor-pointer" href="#" data-date="2024-05-20">
              Kompetisi Inovasi
            </a>
            <p class="text-[#6b7280] mt-1">
              20 Mei 2024
            </p>
          </div>
        </div>
      </article>
    </section>
  </main>

  <footer class="bg-[#0a8aff] mt-6 rounded-b-md">
    <div class="max-w-6xl mx-auto px-6 py-4 text-center">
      <p class="text-white text-xs md:text-sm font-normal">
        © Copyright 2025 - Unit Kegiatan Infinite Technology UNP – All Rights Reserved.
      </p>
    </div>
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

    // Slider functionality
    const cardsSlider = document.getElementById('cardsSlider');
    const prevArrow = document.getElementById('prevArrow');
    const nextArrow = document.getElementById('nextArrow');
    const paginationDots = document.getElementById('paginationDots').children;
    const calendarDates = document.getElementById('calendarDates');
    const currentMonth = document.getElementById('currentMonth');
    const prevMonth = document.getElementById('prevMonth');
    const nextMonth = document.getElementById('nextMonth');

    // Announcement dates in ISO format strings
    const announcementDates = [
      "2025-05-12",
      "2025-05-15",
      "2025-05-20"
    ];

    let date = new Date();
    let currentYear = date.getFullYear();
    let currentMonthIndex = date.getMonth();

    function renderCalendar() {
      calendarDates.innerHTML = '';

      const firstDay = new Date(currentYear, currentMonthIndex, 1).getDay();
      const lastDate = new Date(currentYear, currentMonthIndex + 1, 0).getDate();

      currentMonth.textContent = new Date(currentYear, currentMonthIndex).toLocaleString('id-ID', {
        month: 'long',
        year: 'numeric',
      });

      // Create empty cells for days before the first day of the month
      for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement('div');
        emptyCell.className = 'border rounded bg-white size-full aspect-square';
        calendarDates.appendChild(emptyCell);
      }

      // Create day cells
      for (let day = 1; day <= lastDate; day++) {
        const dayCell = document.createElement('button');
        dayCell.className = 'border rounded bg-white text-[#374151] hover:bg-[#f1f5f9] size-full aspect-square text-xl relative';
        dayCell.innerText = day;

        // Compose date string for this day in ISO format yyyy-mm-dd
        const dayStr = day.toString().padStart(2, '0');
        const monthStr = (currentMonthIndex + 1).toString().padStart(2, '0');
        const dateStr = `${currentYear}-${monthStr}-${dayStr}`;

        // Check if this date is in announcementDates
        if (announcementDates.includes(dateStr)) {
          // Add a small blue dot at bottom center to mark announcement
          const dot = document.createElement('span');
          dot.className = 'absolute bottom-1 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-[#1565d8]';
          dayCell.appendChild(dot);
        }

        calendarDates.appendChild(dayCell);
      }
    }

    prevMonth.addEventListener('click', () => {
      currentMonthIndex--;
      if (currentMonthIndex < 0) {
        currentMonthIndex = 11;
        currentYear--;
      }
      renderCalendar();
    });

    nextMonth.addEventListener('click', () => {
      currentMonthIndex++;
      if (currentMonthIndex > 11) {
        currentMonthIndex = 0;
        currentYear++;
      }
      renderCalendar();
    });

    renderCalendar();

    const totalSlides = 5;
    let currentSlide = 0;

    function updateSlider() {
      const translateXPercent = -currentSlide * 100;
      cardsSlider.style.transform = `translateX(${translateXPercent}%)`;
      // Update dots
      for (let i = 0; i < paginationDots.length; i++) {
        if (i === currentSlide) {
          paginationDots[i].classList.remove('bg-gray-300');
          paginationDots[i].classList.add('bg-[#1565d8]');
        } else {
          paginationDots[i].classList.remove('bg-[#1565d8]');
          paginationDots[i].classList.add('bg-gray-300');
        }
      }
    }

    prevArrow.addEventListener('click', () => {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      updateSlider();
    });

    nextArrow.addEventListener('click', () => {
      currentSlide = (currentSlide + 1) % totalSlides;
      updateSlider();
    });

    // Click on dots to jump to slide
    for (let i = 0; i < paginationDots.length; i++) {
      paginationDots[i].addEventListener('click', () => {
        currentSlide = i;
        updateSlider();
      });
    }

    // Initialize slider position
    updateSlider();
  </script>
</body>

</html>