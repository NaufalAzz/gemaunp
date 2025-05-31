<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Login | GEMA UNP
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <li class="px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer" href="index2.php">
                    <a href="index2.php">
                        Beranda</a>
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
    <!-- Main content -->
    <main class="flex-grow flex items-center justify-center px-4">
        <?php
        session_start();
        include 'db.php';

        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $conn->real_escape_string($_POST['username']);
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
            $result = $conn->query($sql);

            if ($result && $result->num_rows === 1) {
                $user = $result->fetch_assoc();
                // Assuming passwords are hashed using password_hash()
                if ($password === $user['password']) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    header('Location: index2.php');
                    exit();
                } else {
                    $error = 'Username atau password salah.';
                }
            } else {
                $error = 'Username atau password salah.';
            }
        }
        ?>
        <form method="POST" aria-label="Login Unit Kegiatan form"
            class="bg-white rounded-lg shadow-md p-8 w-full max-w-sm" novalidate>
            <h2 class="text-[#004a99] font-extrabold text-xl mb-6 text-center">
                Login Unit Kegiatan
            </h2>
            <?php if ($error): ?>
                <div class="bg-red-100 text-red-700 text-sm rounded-md px-4 py-4 mb-4 flex justify-between items-center"
                    role="alert">
                    <span>
                        <?php echo htmlspecialchars($error); ?>
                    </span>
                    <button aria-label="Dismiss alert" class="text-red-700 hover:text-red-900" type="button"
                        onclick="this.parentElement.style.display='none'">
                        ×
                    </button>
                </div>
            <?php else: ?>
                <div class="bg-[#F5F5F5] text-[#666666] text-sm rounded-md px-4 py-4 mb-4 flex justify-between items-center"
                    role="alert">
                    <span>
                        Hanya untuk pengurus UK terdaftar
                    </span>
                    <button aria-label="Dismiss alert" class="text-[#666666] hover:text-[#333333]" type="button"
                        onclick="this.parentElement.style.display='none'">
                        ×
                    </button>
                </div>
            <?php endif; ?>
            <input name="username"
                class="w-full border border-gray-300 rounded-md px-4 py-3 mb-4 text-sm placeholder-black focus:outline-none focus:ring-2 focus:ring-[#0080ff]"
                placeholder="Username" required type="text" autocomplete="username" />
            <input name="password"
                class="w-full border border-gray-300 rounded-md px-4 py-3 mb-6 text-sm placeholder-black focus:outline-none focus:ring-2 focus:ring-[#0080ff]"
                placeholder="Password" required type="password" autocomplete="current-password" />
            <button
                class="w-full bg-[#0080ff] text-white text-base font-normal rounded-md py-3 mb-4 hover:bg-[#0069e0] transition-colors"
                type="submit">
                Masuk sebagai UK
            </button>
            <div class="text-center">
                <a class="text-[#0080ff] text-sm hover:underline" href="#">
                    Lupa Password?
                </a>
            </div>
        </form>
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