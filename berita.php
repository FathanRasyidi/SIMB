<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsunami";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
//untuk header
$sql2 = "SELECT * FROM data_tsunami ORDER BY id DESC";
$result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMB Tsunami</title>
    <link rel="icon" href="asset/tsunami.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font/stylesheet.css">
    <style>
        body {
            font-family: 'Trip Sans';
        }

        #container {
            height: 500px;
            min-width: 310px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            margin-bottom: 2em;
        }

        .loading {
            margin-top: 10em;
            text-align: center;
            color: gray;
        }

        .container {
            overflow-x: auto;
            scrollbar-width: none;
        }

        .container::-webkit-scrollbar {
            display: none;
        }

        .content {
            min-height: calc(100vh - 6rem);
            max-height: 100vh;
            overflow-y: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="body" onload="startTime()">
    <div class="fixed w-full z-30 flex bg-white p-2 items-center justify-between h-20 px-10 pr-4 shadow-lg">
        <div class="logo ml-12 transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
        <a href="admin.php">
            <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500"
                style="font-size: 30px">
                peka - tsunami
            </span></a>
        </div>
        <!-- Kanan -->
        <div class="grow h-full flex items-center justify-end">
            <div class="flex items-center justify-end space-x-2">
            <div class="text-black bg-black bg-opacity-5 font-bold py-1 px-3 rounded-xl">
                    <div class="text-red-500 text-sm">PERINGATAN TSUNAMI!</div>
                    <div class="flex items-center space-x-1">
                        <div>
                        <?php
                        if ($result2->num_rows > 0) {
                            $latestTsunami = $result2->fetch_assoc();
                            echo '<div class="text-gray-600 text-xs">' . strtoupper($latestTsunami["Sebab_tsunami"]) .' - ' . strtoupper($latestTsunami['Waktu_kejadian']) . '</div>';
                            echo '<div class="text-gray-600 text-xs">';
                            if ($latestTsunami['Elevasi_gelombang_tsunami_m'] != NULL) {
                                echo 'ELEVASI : ' .$latestTsunami['Elevasi_gelombang_tsunami_m'] . ", ";
                            }
                            echo '<span class="text-blue-500">' . strtoupper($latestTsunami['Lokasi_Provinsi']) . ' - ' . strtoupper($latestTsunami['Lokasi_KabKota']) .'</span></div>';
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="text-black bg-black bg-opacity-5 font-bold py-2 px-4 rounded-2xl">
                    <div style="font-size: 10px; line-height: 1;">Jam</div>
                    <div id="jam" class="text-center" style="font-size: 25px; line-height: 1; width: 20px"></div>
                </div>
                <div class="text-black bg-black bg-opacity-5 font-bold py-2 px-4 rounded-2xl">
                    <div style="font-size: 10px; line-height: 1;">Menit</div>
                    <div id="menit" class="text-center" style="font-size: 25px; line-height: 1; width: 20px"></div>
                </div>
                <div class="text-black bg-black bg-opacity-5 font-bold py-2 px-4 rounded-2xl">
                    <div style="font-size: 10px; line-height: 1;">Detik</div>
                    <div id="detik" class="text-center" style="font-size: 25px; line-height: 1; width: 20px"></div>
                </div>
                <script>
                    function startTime() {
                        const today = new Date();
                        let h = today.getHours();
                        let m = today.getMinutes();
                        let s = today.getSeconds();
                        m = checkTime(m);
                        s = checkTime(s);
                        document.getElementById('jam').innerHTML = h;
                        document.getElementById('menit').innerHTML = m;
                        document.getElementById('detik').innerHTML = s;
                        setTimeout(startTime, 1000);
                    }

                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i
                        };
                        return i;
                    }
                </script>
            </div>
        </div>
    </div>

    <aside
        class="w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-gradient-to-r from-blue-600 to-blue-900">
        <!-- open sidebar button -->
        <div
            class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between  border-white bg-[#1E293B]  absolute top-2 rounded-full h-16">
            <div class="flex pl-4 items-center space-x-2 ">
            </div>
            <div class="flex items-center space-x-3 group bg-white  pl-5 pr-2 py-1 rounded-full text-white  ">
                <div class="transform ease-in-out duration-300 mr-12">
                    <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">
                        peka - tsunami
                    </span>
                </div>
            </div>
        </div>
        <div onclick="openNav()"
            class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white bg-blue-900 hover:bg-blue-900 absolute top-4 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <!-- MAX SIDEBAR-->
        <div class="max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
            <a href="index.php">
                <button
                    class="hover:ml-4 w-full text-white hover:bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <div>
                        Home
                    </div>
                </button></a>
            <a href="stats.php">
                <button href="stats.php"
                    class="hover:ml-4 w-full text-white hover:bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                    </svg>
                    <div>
                        Statistics
                    </div>
                </button> </a>
            <a href="data.php">
                <button href="data.php"
                    class="hover:ml-4 w-full text-white hover:bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                    <div>
                        Data Orang Hilang
                    </div>
                </button>
            </a>
            <a href="berita.php">
                <button href="data.php"
                    class="hover:ml-4 w-full text-white bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    <div>
                        Berita
                    </div>
                </button>
            </a>
        </div>
        <!-- MINI SIDEBAR-->
        <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <a href="index.php"
                class="justify-end pr-4 ml-1 text-white hover:bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <a href="stats.php"
                class="justify-end pr-4 ml-1 text-white hover:bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
            </a>
            <a href="data.php"
                class="justify-end pr-4 ml-1 text-white hover:bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </a>
            <a href="berita.php"
                class="justify-end pr-4 ml-1 text-white bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
            </a>
        </div>

    </aside>
    <!-- Isian -->

    <div class="bg-[#eef0f2] content ml-12 transform ease-in-out duration-500 pt-24 px-2 md:px-5 pb-4">
        <!-- berita -->

        <!-- Berita atas -->
        <div class="container flex space-x-4 py-4 flex-nowrap mb-4">
            <div
                class="max-w-sm bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 flex-shrink-0">
                <a href="berita-detail.php?id=1">
                    <img class="rounded-t-lg h-48 w-full" src="asset/berita1.jpg" alt="" />
                    <div class="p-5">
                        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="font-size: 22px;">Tsunami Aceh, Bencana Alam Terbesar & Memori Kelam Tahun 2004
                        </h6>
                    </div>
                </a>
            </div>

            <div
                class="max-w-sm bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 flex-shrink-0">
                <a href="berita-detail.php?id=2">
                    <img class="rounded-t-lg h-48 w-full" src="asset/berita3.jpg" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="font-size: 22px;">Tsunami dan Gempa Palu Donggala 2018 dalam Angka: Korban, Daya
                            Rusak, dan Lainnya</h5>
                    </div>
                </a>
            </div>

            <div
                class="max-w-sm bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 flex-shrink-0">
                <a href="berita-detail.php?id=3">
                    <img class="rounded-t-lg h-48 w-full" src="asset/berita4.jpg" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="font-size: 22px;">BMKG Ungkap Kronologi Tsunami Selat Sunda 22 Desember 2018</h5>
                    </div>
                </a>
            </div>

            <div
                class="max-w-sm bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 flex-shrink-0">
                <a href="berita-detail.php?id=4">
                    <img class="rounded-t-lg h-48 w-full" src="asset/berita5.jpg" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="font-size: 22px;">10 Tsunami Terdahsyat di Dunia, 3 di Indonesia</h5>
                    </div>
                </a>
            </div>
        </div>


        <!-- Berita Bawah -->
        <div class="grid grid-cols-4 gap-4">
            <div
                class="bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 col-span-2 row-span-2">
                <a href="berita-detail.php?id=5">
                    <img class="rounded-t-lg h-55" src="asset/ber6.webp" alt="" />
                    <div class="p-5">
                        <h4 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white "
                            style="font-size: 28px;">Daftar Wilayah Berpotensi Terdampak Tsunami Gempa Megathrust, BRIN:
                            Gelombang Bisa sampai Jakarta</h4>
                        <p class="text-justify mt-4">Badan Riset dan Inovasi Nasional (BRIN) mengungkapkan bahwa
                            gelombang tsunami
                            dapat muncul sebagai dampak dari gempa megathrust di Selat Sunda dan Mentawai-Siberut.
                            Bahkan, tsunami tersebut diperkirakan bisa mencapai Jakarta.

                            Peneliti BRIN, Danny Hilman Natawidjaja, menjelaskan bahwa tsunami dapat mencapai Jakarta
                            jika gempa akibat megathrust Selat Sunda memiliki magnitudo hingga M 9.

                            “Magnitudo minimalnya sekitar 8 dan maksimalnya bisa mencapai 9. Jika terjadi, apalagi
                            hingga mencapai M 9, guncangannya akan sangat keras dan tsunaminya bisa sangat besar,” kata
                            Danny kepada Kompas.com pada Selasa (20/8/2024).</p>
                    </div>
                </a>
            </div>
            <div
                class="bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 col-span-1 row-span-1">
                <a href="berita-detail.php?id=6">
                    <img class="rounded-t-lg h-40 w-full" src="asset/berita7.jpeg" alt="" />
                    <div class="p-5">
                        <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Pembangunan Aceh
                            Setelah 20 Tahun Berlalu Pasca Tsunami</h5>
                    </div>
                </a>
            </div>
            <div
                class="bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 col-span-1 row-span-1">
                <a href="berita-detail.php?id=7">
                    <img class="rounded-t-lg h-40 w-full" src="asset/berita8.jpg" alt="" />
                    <div class="p-5">
                        <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Indonesia Rujukan
                            Global Pengembangan Sistem Peringatan Dini Tsunami</h5>
                    </div>
                </a>
            </div>
            <div
                class="bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 col-span-1 row-span-1">
                <a href="berita-detail.php?id=8">
                    <img class="rounded-t-lg h-40 w-full" src="asset/berita9.jpeg" alt="" />
                    <div class="p-5">
                        <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Tak Bisa Diprediksi,
                            Yang Terpenting Adalah Mitigasi Bencana Gempa Bumi dan Tsunami</h5>
                    </div>
                </a>
            </div>
            <div
                class="bg-white border-2 border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-600 col-span-1 row-span-1">
                <a href="berita-detail.php?id=9">
                    <img class="rounded-t-lg h-40 w-full" src="asset/berita10.jpg" alt="" />
                    <div class="p-5">
                        <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Tanggap Bencana, BPBD
                            Bantul Gelar Simulasi Penanggulangan Tsunami</h5>
                    </div>
                </a>
            </div>
            <!-- Berita bawah end -->
        </div>

    </div>




    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
        const maxToolbar = document.querySelector(".max-toolbar")
        const logo = document.querySelector('.logo')
        const content = document.querySelector('.content')

        function openNav() {
            if (sidebar.classList.contains('-translate-x-48')) {
                // max sidebar 
                sidebar.classList.remove("-translate-x-48")
                sidebar.classList.add("translate-x-none")
                maxSidebar.classList.remove("hidden")
                maxSidebar.classList.add("flex")
                miniSidebar.classList.remove("flex")
                miniSidebar.classList.add("hidden")
                maxToolbar.classList.add("translate-x-0")
                maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                logo.classList.remove("ml-12")
                content.classList.remove("ml-12")
                content.classList.add("ml-12", "md:ml-60")
            } else {
                // mini sidebar
                sidebar.classList.add("-translate-x-48")
                sidebar.classList.remove("translate-x-none")
                maxSidebar.classList.add("hidden")
                maxSidebar.classList.remove("flex")
                miniSidebar.classList.add("flex")
                miniSidebar.classList.remove("hidden")
                maxToolbar.classList.add("translate-x-24", "scale-x-0")
                maxToolbar.classList.remove("translate-x-0")
                logo.classList.add('ml-12')
                content.classList.remove("ml-12", "md:ml-60")
                content.classList.add("ml-12")

            }

        }
    </script>
</body>

</html>