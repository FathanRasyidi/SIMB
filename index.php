<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMB Tsunami</title>
    <link rel="icon" href="asset/tsunami.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

        /* cardflip */
        .card-container {
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .card-back {
            transform: rotateY(180deg);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .card-front {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }

        .group:hover .card-container {
            transform: rotateY(180deg);
        }
    </style>
</head>

<body class="body" onload="startTime()">
    <div class="fixed w-full z-30 flex bg-white p-2 items-center justify-between h-20 px-10 pr-4 shadow-lg">
        <div class="logo ml-12 transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500"
                style="font-size: 30px">
                peka - tsunami
            </span>
        </div>
        <!-- Kanan -->
        <div class="grow h-full flex items-center justify-end">
            <div class="flex items-center justify-end space-x-2">
                <div class="text-black bg-black bg-opacity-5 font-bold py-1 px-3 rounded-xl">
                    <div class="text-red-500 text-sm">PERINGATAN TSUNAMI!</div>
                    <div class="flex items-center space-x-1">
                        <div class="font-bold text-normal mr-1">M 7.6</div>
                        <div>
                            <div class="text-gray-600 text-xs">02-03-2021, 07:30:30 WIB</div>
                            <div class="text-gray-600 text-xs">12 km <span class="text-blue-500">LOMBOK -
                                    BENGKULU</span></div>
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
                    class="hover:ml-4 w-full text-white bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
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
        </div>
        <!-- MINI SIDEBAR-->
        <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <a href="index.php"
                class="justify-end pr-4 ml-1 text-white bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
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
        </div>

    </aside>
    <!-- Isian -->
    <div class="bg-[#eef0f2] content ml-12 transform ease-in-out duration-500 pt-24 px-2 md:px-5 pb-4 ">
        <section class="mb-12">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="assets/parallex.png" alt="parallex" class="w-full h-full object-cover">
            </div>
        </section>

        <!-- Pengertian -->
        <section class="max-w-6xl mx-auto space-y-8 p-6 bg-white">
            <header data-aos="zoom-in-up" class="text-center delay-100">
                <h2 class="text-3xl font-bold mt-12 text-blue-600 inline-block">
                    Apa Itu Tsunami?
                </h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></div>
            </header>

            <article class="prose prose-lg delay-200" data-aos="zoom-in-up">
                <p class="text-lg text-justify">
                    Tsunami adalah serapan dari bahasa Jepang 津波 (tsunami): tsu (pelabuhan), dan nami (gelombang)
                    yang
                    dimaksud
                    dengan gelombang air besar yang diakibatkan oleh gangguan di bawah laut, seperti gempa bumi,
                    longsor,
                    letusan gunung berapi, atau jatuhnya meteor.
                </p>
            </article>
        </section>
        <!-- Penyebab -->
        <div data-aos="zoom-in-up" class="text-center delay-100">
            <h2 class="text-3xl font-bold mt-12 text-blue-600 inline-block">
                Penyebab Tsunami
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></div>
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8 bg-white">
            <!-- Card 1 -->
            <div data-aos="zoom-in-up" class="group h-96 perspective delay-200">
                <div class="card-container relative h-full w-full transition-transform duration-500 transform-style-3d">
                    <div class="card-front absolute inset-0 rounded-x1 shadow-lg">
                        <div class="h-4/5">
                            <img class="h-full w-full rounded-t-xl object-cover" src="asset/gempa.png" alt="gempa">
                        </div>
                        <div class="h-1/5 bg-white rounded-b-xl p-4 shadow-md">
                            <h3 class="text-xl font-bold text-center text-gray-800">Gempa Bumi</h3>
                        </div>
                    </div>
                    <div
                        class="card-back absolute inset-0 h-full w-full rounded-xl bg-blue-500 px-8 py-6 text-white [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <div class="flex min-h-full flex-col">
                            <h3 class="text-xl font-bold mb-2">Gempa Bumi</h3>
                            <p class="text-sm text-justify">
                                Gempa bumi dapat menyebabkan tsunami karena pergeseran dasar laut akibat gempa mengubah
                                volume air secara tiba-tiba, menciptakan gelombang besar dan panjang di permukaan laut.
                                Gelombang ini bergerak cepat di laut dalam, tetapi saat mendekati pantai, kecepatannya
                                berkurang dan ketinggiannya meningkat, mengakibatkan gelombang tsunami yang sangat
                                tinggi dan merusak saat mencapai pantai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div data-aos="zoom-in-up" class="group h-96 perspective delay-300">
                <div class="card-container relative h-full w-full transition-transform duration-500 transform-style-3d">
                    <div class="card-front absolute inset-0 rounded-x1 shadow-lg">
                        <div class="h-4/5">
                            <img class="h-full w-full rounded-t-xl object-cover" src="asset/letusangunung.png"
                                alt="gunung berapi">
                        </div>
                        <div class="h-1/5 bg-white rounded-b-xl p-4 shadow-md">
                            <h3 class="text-xl font-bold text-center text-gray-800">Letusan Gunung Berapi</h3>
                        </div>
                    </div>
                    <div
                        class="card-back absolute inset-0 h-full w-full rounded-xl bg-blue-500 px-8 py-6 text-white [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <div class="flex min-h-full flex-col">
                            <h3 class="text-xl font-bold mb-2">Letusan Gunung Berapi</h3>
                            <p class="text-sm text-justify">
                                Aktivitas vulkanik menyebabkan naik atau turunnya bibir gunung berapi yang mengakibatkan
                                tsunami mirip dengan tsunami gempa bawah laut. Ada juga letusan besar pulau gunung
                                berapi di tengah laut yang menyebabkan air bergerak mengisi pulau tersebut dan memulai
                                tsunami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div data-aos="zoom-in-up" class="group h-96 perspective delay-500">
                <div class="card-container relative h-full w-full transition-transform duration-500 transform-style-3d">
                    <div class="card-front absolute inset-0 rounded-x1 shadow-lg">
                        <div class="h-4/5">
                            <img class="h-full w-full rounded-t-xl object-cover" src="asset/longsor.png" alt="longsor">
                        </div>
                        <div class="h-1/5 bg-white rounded-b-xl p-4 shadow-md">
                            <h3 class="text-xl font-bold text-center text-gray-800">Longsor Bawah Laut</h3>
                        </div>
                    </div>
                    <div
                        class="card-back absolute inset-0 h-full w-full rounded-xl bg-blue-500 px-8 py-6 text-white [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <div class="flex min-h-full flex-col">
                            <h3 class="text-xl font-bold mb-2">Longsor Bawah Laut</h3>
                            <p class="text-sm text-justify">
                                Longsor bawah laut dapat menyebabkan massa tanah atau sedimen di dasar laut tergelincir
                                secara tiba-tiba. Pergerakan ini menciptakan gelombang yang bisa menyebar ke seluruh
                                lautan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div data-aos="zoom-in-up" class="group h-96 perspective delay-700">
                <div class="card-container relative h-full w-full transition-transform duration-500 transform-style-3d">
                    <div class="card-front absolute inset-0 rounded-x1 shadow-lg">
                        <div class="h-4/5">
                            <img class="h-full w-full rounded-t-xl object-cover" src="asset/meteor.png" alt="meteor">
                        </div>
                        <div class="h-1/5 bg-white rounded-b-xl p-4 shadow-md">
                            <h3 class="text-xl font-bold text-center text-gray-800">Hantaman Meteor</h3>
                        </div>
                    </div>
                    <div
                        class="card-back absolute inset-0 h-full w-full rounded-xl bg-blue-500 px-8 py-6 text-white [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <div class="flex min-h-full flex-col">
                            <h3 class="text-xl font-bold mb-2">Hantaman Meteor</h3>
                            <p class="text-sm text-justify">
                                Benturan benda besar ke dalam air akibat ledakan senjata atau jatuhnya meteor dapat
                                memicu gelombang air, dan tsunami yang dihasilkannya memiliki karakteristik fisika yang
                                mirip dengan tsunami letusan gunung berapi. Namun kejadian ini sangat langka, bahkan
                                belum terdapat catatan sejarahnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kawasan Rentan -->
        <div data-aos="zoom-in-up" class="text-center delay-100">
            <h2 class="text-3xl font-bold mt-12 text-blue-600 inline-block">
                Kawasan Rentan Tsunami
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></div>
        </div>

        <section class="max-w-6xl mx-auto p-6 bg-white">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div data-aos="zoom-in-right" class="delay-200">
                    <img class="w-full rounded-lg shadow-lg" src="asset/kawasanrentan.png" alt="kawasanrentan" />
                </div>
                <div data-aos="zoom-in-left" class="delay-300">
                    <p class="text-lg text-justify">
                        Rawan tidaknya suatu daerah ditentukan oleh ada tidaknya pemicu. Hampir 80% tsunami di bumi
                        terjadi di kawasan yang disebut
                        <span class="font-bold text-blue-500">Lingkaran Api Pasifik</span>, zona penunjaman di sekitar
                        Samudra
                        Pasifik yang mengalami banyak gempa bumi besar. Di luar kawasan ini, tsunami cukup jarang
                        terjadi.
                    </p>
                </div>
            </div>
        </section>

        <!-- Rambatan Gelombang -->
        <div data-aos="zoom-in-up" class="text-center delay-100">
            <h2 class="text-3xl font-bold mt-12 text-blue-600 inline-block">
                Rambatan Gelombang Tsunami
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></div>
        </div>

        <section data-aos="zoom-in-up" class="max-w-6xl mx-auto p-6 bg-white mt-2 delay-200">
            <div class="relative w-full rounded-xl shadow-inner bg-blue-100 overflow-hidden">
                <video class="w-full h-auto rounded-xl" controls poster="asset/thumbnail-tsunami.jpg">
                    <source src="asset/tsunamiAnimasi.mp4">
                </video>
            </div>
        </section>

        <section class="max-w-6xl mx-auto mt-5">
            <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-white">
                <div class="flex flex-row-reverse md:contents">
                    <div data-aos="zoom-in-right"
                        class="bg-blue-600 col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md delay-300">
                        <h3 class="font-semibold text-lg mb-1">Dari Pusat Tsunami Hingga ke Pantai</h3>
                        <p class="leading-tight text-justify">
                            Gelombang tsunami bermula dari pusat gangguan di laut sebagai gelombang besar dengan panjang
                            gelombang yang sangat panjang (berkisar beberapa kilometer hingga ratusan kilometer). Waktu
                            tempuh gelombang tsunami hingga mencapai suatu titik bergantung pada karakteristik dasar
                            laut serta jarak dari pusat tsunami. Berbeda dengan ombak biasa yang hanya melibatkan
                            lapisan permukaan laut, tsunami melibatkan seluruh kolom air, dari permukaan hingga dasar
                            laut.
                        </p>
                    </div>
                    <div data-aos="zoom-in-up" class="col-start-5 col-end-6 md:mx-auto relative mr-10 delay-200">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                    </div>
                </div>
                <div class="flex md:contents">
                    <div data-aos="zoom-in-up" class="col-start-5 col-end-6 mr-10 md:mx-auto relative delay-200">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                    </div>
                    <div data-aos="zoom-in-left"
                        class="bg-blue-600 col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md delay-300">
                        <h3 class="font-semibold text-lg mb-1">Saat Mendekati Pantai</h3>
                        <p class="leading-tight text-justify">
                            Saat mendekati pantai, kedalaman laut yang semakin dangkal menyebabkan gelombang tsunami
                            memendek namun tingginya meningkat. Tidak semua tsunami diawali oleh surutnya air laut;
                            terkadang tsunami langsung disertai kenaikan permukaan air. Jika bagian lembah gelombang
                            tiba lebih dulu, permukaan air laut akan tampak turun. Sebaliknya, jika puncak gelombang
                            yang tiba lebih dulu, air laut akan langsung naik.
                        </p>
                    </div>
                </div>
                <div class="flex flex-row-reverse md:contents">
                    <div data-aos="zoom-in-right"
                        class="bg-blue-600 col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md delay-300">
                        <h3 class="font-semibold text-lg mb-1">Mencapai Daratan</h3>
                        <p class="leading-tight text-justify">
                            Pada umumnya, tsunami tidak hadir sebagai dinding air raksasa, tetapi berupa kenaikan
                            permukaan laut secara tiba-tiba (terkadang diawali surut) yang dapat berlangsung berjam-jam.
                            Tsunami dapat mengakibatkan kenaikan air hingga 15-30 meter dan menyebabkan banjir dengan
                            kecepatan hingga 90 km/jam, menghancurkan bangunan dan infrastruktur di daratan. Saat arus
                            balik tsunami kembali ke laut setelah banjir, kerusakan dapat semakin parah karena air
                            mengalir deras dan bergejolak, menyebabkan erosi serta merusak pondasi bangunan di jalurnya.
                        </p>
                    </div>
                    <div data-aos="zoom-in-up" class="col-start-5 col-end-6 md:mx-auto relative mr-10 delay-200">
                        <div class="h-1/2 w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                    </div>
                </div>
        </section>

        <!-- Mitigasi -->
        <div data-aos="zoom-in-up" class="text-center delay-100">
            <h2 class="text-3xl font-bold mt-12 text-blue-600 inline-block">
                Mitigasi Tsunami
            </h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-2 rounded-full"></div>
        </div>

        <section data-aos="zoom-in-up" class="max-w-6xl mx-auto p-6 bg-white mt-4 delay-200">
            <p class="text-lg text-justify mb-6">
                Mitigasi adalah serangkaian upaya untuk mengurangi risiko bencana, baik melalui pembangunan fisik maupun
                penyadaran dan peningkatan kemampuan menghadapi ancaman bencana.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mitigasi Struktural -->
                <div data-aos="zoom-in-right" class="bg-blue-100 rounded-lg shadow-lg p-6 delay-200">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Mitigasi Struktural</h3>
                    <p class="mb-4 text-justify">
                        Mitigasi struktural merupakan upaya untuk mengurangi risiko bencana tsunami melalui pembangunan
                        fisik serta infrastruktur pelindung. Terdapat dua jenis mitigasi struktural:
                    </p>

                    <h4 class="font-semibold text-blue-500 mb-2">1. Mitigasi Struktural Alami</h4>
                    <ul class="space-y-3 mb-4">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Penanaman dan pelestarian hutan mangrove sebagai pelindung alami pantai</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Perlindungan terumbu karang yang berfungsi sebagai pemecah gelombang alami</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold text-blue-500 mb-2">2. Mitigasi Struktural Buatan</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pembangunan tembok laut (seawall) untuk menahan dan memantulkan energi gelombang
                                tsunami</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pembuatan pemecah gelombang (breakwater) di lepas pantai untuk meredam energi
                                tsunami</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pembangunan gedung tahan tsunami dan tempat evakuasi vertikal (shelter)</span>
                        </li>
                    </ul>
                </div>

                <!-- Mitigasi Non Struktural -->
                <div data-aos="zoom-in-left" class="bg-blue-100 rounded-lg shadow-lg p-6 delay-300">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Mitigasi Non-Struktural</h3>
                    <p class="mb-4 text-justify">
                        Mitigasi non-struktural adalah upaya pengurangan risiko bencana tsunami melalui pengembangan
                        kebijakan, pengetahuan, dan kesadaran masyarakat. Beberapa bentuk mitigasi non-struktural
                        meliputi:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pemetaan dan identifikasi daerah rawan tsunami serta penetapan jalur evakuasi yang
                                aman</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pengembangan dan pemasangan sistem peringatan dini tsunami (Early Warning
                                System)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Sosialisasi dan edukasi masyarakat tentang bahaya tsunami dan cara penyelamatan
                                diri</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pelaksanaan pelatihan dan simulasi evakuasi tsunami secara berkala untuk meningkatkan
                                kesiapsiagaan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Penyusunan kebijakan tata ruang dan penggunaan lahan di wilayah pesisir yang
                                mempertimbangkan risiko tsunami</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
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

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>