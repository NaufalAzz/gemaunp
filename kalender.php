<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kalender Kegiatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        /* Ensure all table cells have equal height */
        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
        }

        tbody tr {
            height: 144px;
            /* 6 * 24px rows approx to match h-24 */
        }

        td {
            vertical-align: top;
            padding-top: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            overflow-wrap: break-word;
            word-wrap: break-word;
            hyphens: auto;
        }

        /* Date number styling */
        td>.date-number {
            font-weight: 400;
            color: inherit;
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }

        /* Event badges container */
        td>.events {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            overflow: hidden;
        }

        /* Event badge styling */
        .event-badge {
            background-color: #cce4ff;
            color: #0a62d9;
            border-radius: 0.375rem;
            padding: 0.125rem 0.5rem;
            font-size: 0.75rem;
            font-weight: 400;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-[#0078FF] flex justify-between items-center px-6 py-3 relative max-w-full w-full">
            <div class="flex items-center space-x-2">
                <a href="index2.php"><img
                        alt="GEMA Universitas Negeri Padang logo, circular emblem with blue and yellow colors"
                        class="w-8 h-8" height="32" src="image/LOGO UNP.png" width="32" /></a>
                <a href="index2.php"><img
                        alt="GEMA Universitas Negeri Padang logo, circular emblem with blue and yellow colors"
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

        <!-- Main content -->
        <main class="flex-grow px-6 py-8 max-w-full w-full">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <h2 class="text-[#003a75] font-extrabold text-2xl mb-4 md:mb-0">
                    Kalender Kegiatan
                </h2>
                <div class="flex flex-wrap gap-3 items-center">
                    <div class="relative">
                        <select id="monthSelect"
                            class="bg-gray-300 rounded-md px-4 py-2 text-[#333333] text-sm font-normal cursor-pointer appearance-none pr-8">
                            <option value="0">Januari</option>
                            <option value="1">Februari</option>
                            <option value="2">Maret</option>
                            <option value="3">April</option>
                            <option value="4" selected>Mei</option>
                            <option value="5">Juni</option>
                            <option value="6">Juli</option>
                            <option value="7">Agustus</option>
                            <option value="8">September</option>
                            <option value="9">Oktober</option>
                            <option value="10">November</option>
                            <option value="11">Desember</option>
                        </select>
                        <i
                            class="fas fa-chevron-down absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-xs text-[#333333]"></i>
                    </div>
                    <div class="relative">
                        <select id="yearSelect"
                            class="bg-gray-300 rounded-md px-4 py-2 text-[#333333] text-sm font-normal cursor-pointer appearance-none pr-8">
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025" selected>2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                        <i
                            class="fas fa-chevron-down absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-xs text-[#333333]"></i>
                    </div>
                    <button type="button" id="prevMonth"
                        class="bg-gray-300 rounded-md px-3 py-2 text-[#333333] text-sm font-normal flex items-center"
                        aria-label="Bulan sebelumnya">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" id="nextMonth"
                        class="bg-gray-300 rounded-md px-3 py-2 text-[#333333] text-sm font-normal flex items-center"
                        aria-label="Bulan berikutnya">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="relative">
                        <select id="categorySelect"
                            class="bg-gray-300 rounded-md px-4 py-2 text-[#333333] text-sm font-normal cursor-pointer appearance-none pr-8">
                            <option value="all" selected>Semua Kategori</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                            <option value="kompetisi">Kompetisi</option>
                        </select>
                        <i
                            class="fas fa-chevron-down absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-xs text-[#333333]"></i>
                    </div>
                    <form class="flex items-center border border-gray-300 rounded-md px-3 py-2 w-60" role="search"
                        id="searchForm">
                        <input type="text" placeholder="Cari kegiatan..." aria-label="Cari kegiatan" id="searchInput"
                            class="flex-grow text-sm text-gray-700 placeholder-gray-500 focus:outline-none" />
                        <button type="submit" aria-label="Search" class="ml-2 text-gray-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Calendar Table -->
            <div class="overflow-x-auto">
                <table>
                    <thead>
                        <tr class="bg-white border-b border-gray-200 text-gray-600 text-sm font-normal">
                            <th class="py-3 px-4 text-center">Min</th>
                            <th class="py-3 px-4 text-center">Sen</th>
                            <th class="py-3 px-4 text-center">Sel</th>
                            <th class="py-3 px-4 text-center">Rab</th>
                            <th class="py-3 px-4 text-center">Kam</th>
                            <th class="py-3 px-4 text-center">Jum</th>
                            <th class="py-3 px-4 text-center">Sab</th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody" class="text-sm text-gray-500 font-normal">
                        <!-- Calendar days will be rendered here -->
                    </tbody>
                </table>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-[#0a8aff] text-white text-center py-4 mt-6 max-w-full w-full">
            <p class="text-xs md:text-sm font-normal">© Copyright 2025 - Unit Kegiatan Infinite Technology UNP – All
                Rights
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

            // Elements
            const monthSelect = document.getElementById('monthSelect');
            const yearSelect = document.getElementById('yearSelect');
            const categorySelect = document.getElementById('categorySelect');
            const searchForm = document.getElementById('searchForm');
            const searchInput = document.getElementById('searchInput');
            const calendarBody = document.getElementById('calendarBody');
            const prevMonthBtn = document.getElementById('prevMonth');
            const nextMonthBtn = document.getElementById('nextMonth');

            // Sample events data with categories and dates
            // Format: { date: 'YYYY-MM-DD', title: 'Event Title', category: 'category' }
            const events = [
                { date: '2025-05-15', title: 'Workshop Leadership', category: 'workshop' },
                { date: '2025-05-15', title: 'Seminar Teknologi', category: 'seminar' },
                { date: '2025-05-20', title: 'Kompetisi Inovasi', category: 'kompetisi' },
                { date: '2025-06-05', title: 'Workshop Desain', category: 'workshop' },
                { date: '2025-06-12', title: 'Seminar Pendidikan', category: 'seminar' },
                { date: '2025-06-18', title: 'Kompetisi Robotik', category: 'kompetisi' },
                { date: '2025-07-04', title: 'Workshop Coding', category: 'workshop' },
                { date: '2025-07-10', title: 'Seminar Kewirausahaan', category: 'seminar' },
                { date: '2025-07-15', title: 'Kompetisi Debat', category: 'kompetisi' },
                { date: '2025-08-01', title: 'Workshop Fotografi', category: 'workshop' },
                { date: '2025-08-08', title: 'Seminar Lingkungan', category: 'seminar' },
                { date: '2025-08-20', title: 'Kompetisi Catur', category: 'kompetisi' },
                { date: '2025-09-05', title: 'Workshop Musik', category: 'workshop' },
                { date: '2025-09-12', title: 'Seminar Kesehatan', category: 'seminar' },
                { date: '2025-09-25', title: 'Kompetisi Esai', category: 'kompetisi' }
            ];

            // Helper: Get number of days in month
            function daysInMonth(year, month) {
                return new Date(year, month + 1, 0).getDate();
            }

            // Helper: Get day of week for 1st day of month (0=Sunday, 1=Monday,...)
            function firstDayOfMonth(year, month) {
                return new Date(year, month, 1).getDay();
            }

            // Render calendar for given month and year with optional filters
            function renderCalendar(year, month, categoryFilter = 'all', searchTerm = '') {
                calendarBody.innerHTML = '';

                const firstDay = firstDayOfMonth(year, month);
                const totalDays = daysInMonth(year, month);

                // We want weeks starting on Sunday (0) to Saturday (6)
                // firstDay is 0=Sunday, so no adjustment needed

                // Calculate total cells: days from previous month to fill first week + current month days + next month days to fill last week
                // Calendar shows 6 rows always (42 cells)
                const totalCells = 42;

                // Previous month info
                let prevMonth = month - 1;
                let prevYear = year;
                if (prevMonth < 0) {
                    prevMonth = 11;
                    prevYear--;
                }
                const prevMonthDays = daysInMonth(prevYear, prevMonth);

                // Start building rows
                let dayCounter = 1;
                let nextMonthDay = 1;

                for (let week = 0; week < 6; week++) {
                    const tr = document.createElement('tr');
                    tr.classList.add('border-b', 'border-gray-100');

                    for (let dayOfWeek = 0; dayOfWeek < 7; dayOfWeek++) {
                        const td = document.createElement('td');

                        // Calculate cell index in calendar (0 to 41)
                        const cellIndex = week * 7 + dayOfWeek;

                        let dateNumber = null;
                        let cellYear = year;
                        let cellMonth = month;
                        let isCurrentMonth = true;

                        if (cellIndex < firstDay) {
                            // Previous month days
                            dateNumber = prevMonthDays - (firstDay - 1) + cellIndex;
                            cellMonth = prevMonth;
                            cellYear = prevYear;
                            isCurrentMonth = false;
                        } else if (dayCounter > totalDays) {
                            // Next month days
                            dateNumber = nextMonthDay++;
                            cellMonth = (month + 1) % 12;
                            cellYear = month === 11 ? year + 1 : year;
                            isCurrentMonth = false;
                        } else {
                            // Current month days
                            dateNumber = dayCounter++;
                        }

                        // Date number div
                        const dateDiv = document.createElement('div');
                        dateDiv.classList.add('date-number');
                        if (!isCurrentMonth) {
                            dateDiv.classList.add('text-gray-300');
                        }
                        dateDiv.textContent = dateNumber;
                        td.appendChild(dateDiv);

                        // Format date string for event matching
                        const dateStr = `${cellYear.toString().padStart(4, '0')}-${(cellMonth + 1).toString().padStart(2, '0')}-${dateNumber.toString().padStart(2, '0')}`;

                        // Filter events for this date
                        let dayEvents = events.filter(ev => ev.date === dateStr);

                        // Apply category filter
                        if (categoryFilter !== 'all') {
                            dayEvents = dayEvents.filter(ev => ev.category === categoryFilter);
                        }

                        // Apply search filter (case insensitive, check if title includes search term)
                        if (searchTerm.trim() !== '') {
                            const lowerSearch = searchTerm.toLowerCase();
                            dayEvents = dayEvents.filter(ev => ev.title.toLowerCase().includes(lowerSearch));
                        }

                        if (dayEvents.length > 0) {
                            const eventsDiv = document.createElement('div');
                            eventsDiv.classList.add('events');

                            dayEvents.forEach(ev => {
                                const badge = document.createElement('div');
                                badge.classList.add('event-badge');
                                badge.title = ev.title;
                                badge.textContent = ev.title;
                                eventsDiv.appendChild(badge);
                            });

                            td.appendChild(eventsDiv);
                        }

                        tr.appendChild(td);
                    }

                    calendarBody.appendChild(tr);
                }
            }

            // Initialize selects with current date if possible
            function initSelects() {
                const today = new Date();
                if (!monthSelect.value) monthSelect.value = today.getMonth();
                if (!yearSelect.value) yearSelect.value = today.getFullYear();
            }

            // Update calendar on select change or search
            function updateCalendar() {
                const year = parseInt(yearSelect.value);
                const month = parseInt(monthSelect.value);
                const category = categorySelect.value;
                const searchTerm = searchInput.value;
                renderCalendar(year, month, category, searchTerm);
            }

            // Change month helper
            function changeMonth(offset) {
                let year = parseInt(yearSelect.value);
                let month = parseInt(monthSelect.value);
                month += offset;
                if (month < 0) {
                    month = 11;
                    year--;
                } else if (month > 11) {
                    month = 0;
                    year++;
                }
                // Update selects
                yearSelect.value = year;
                monthSelect.value = month;
                updateCalendar();
            }

            // Event listeners
            monthSelect.addEventListener('change', updateCalendar);
            yearSelect.addEventListener('change', updateCalendar);
            categorySelect.addEventListener('change', updateCalendar);
            searchForm.addEventListener('submit', (e) => {
                e.preventDefault();
                updateCalendar();
            });
            prevMonthBtn.addEventListener('click', () => changeMonth(-1));
            nextMonthBtn.addEventListener('click', () => changeMonth(1));

            // Initialize
            initSelects();
            updateCalendar();
        </script>
</body>

</html>