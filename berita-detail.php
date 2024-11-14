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

    <div class="container mx-auto px-4 pt-24">
        <div class="max-w-4xl mx-auto bg-white rounded-lg p-8">
            <?php
            $berita_id = isset($_GET['id']) ? $_GET['id'] : '';

            $berita = [
                '1' => [
                    'title' => 'Tsunami Aceh, Bencana Alam Terbesar & Memori Kelam Tahun 2004',
                    'image' => 'asset/berita1.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <section class="mb-6">
                            <h1 class="text-3xl font-bold mb-6">Tsunami Aceh 2004: Tragedi dan Pemulihan</h1>
                            <p class="mb-4 text-justify">
                                <span class="font-semibold">Tsunami Aceh</span> adalah salah satu bencana terbesar yang pernah melanda Indonesia, terjadi pada <span class="font-semibold">26 Desember 2004</span>. Gelombang tsunami menyapu pesisir Aceh setelah gempa bumi dahsyat berkekuatan <span class="font-semibold">M 9,3</span> mengguncang dasar Samudera Hindia. Gempa ini disebut sebagai gempa terbesar ke-5 dalam sejarah.
                            </p>
                        </section>

                        <section class="mb-6">
                            <h2 class="text-2xl font-bold mt-8 mb-4">Kronologi Bencana</h2>
                            <p class="mb-4 text-justify">
                                Pada pukul 07.59 WIB, gempa pertama kali terasa, diikuti oleh gelombang tsunami setinggi <span class="font-semibold">30 meter</span> dengan kecepatan mencapai <span class="font-semibold">360 km/jam</span>. Gelombang ini menghancurkan pemukiman dan menyeret segala yang ada di jalurnya, termasuk Kapal PLTD Apung yang terseret hingga <span class="font-semibold">5 kilometer</span> dari pantai ke daratan.
                            </p>
                        </section>

                        <section class="mb-6">
                            <h2 class="text-2xl font-bold mt-8 mb-4">Dampak dan Korban</h2>
                            <div class="space-y-4 text-justify">
                                <p>Keesokan harinya, Perserikatan Bangsa-Bangsa (PBB) menyatakan bahwa tsunami Aceh merupakan bencana kemanusiaan terbesar. Bantuan internasional segera datang dari berbagai negara, termasuk pesawat militer Jerman dan kapal induk Amerika Serikat.</p>
                                <p>PBB memperkirakan jumlah korban tewas mencapai lebih dari 200.000 jiwa. Berdasarkan laporan Kompas.com (26/12/2020), total korban tewas diperkirakan mencapai 230.000 jiwa, termasuk dari negara-negara lain yang terdampak seperti India, Sri Lanka, dan Thailand.</p>
                                <p>Di Aceh, tsunami menyebabkan jaringan listrik dan komunikasi terputus, membuat situasi semakin genting. Ribuan orang ditemukan meninggal dunia, sementara ratusan ribu lainnya kehilangan tempat tinggal dan harus bertahan di pengungsian. Presiden Susilo Bambang Yudhoyono menetapkan tiga hari berkabung sebagai tanda belasungkawa nasional.</p>
                            </div>
                        </section>

                        <section class="mb-6">
                            <h2 class="text-2xl font-bold mt-8 mb-4">Pemulihan Pasca-Bencana</h2>
                            <p class="mb-4 text-justify">
                                Proses pemulihan Aceh didukung oleh bantuan dari dalam dan luar negeri. Infrastruktur, perekonomian, dan kondisi psikologis masyarakat perlahan-lahan dipulihkan. Pada tahun 2009, Museum Tsunami Aceh didirikan di Banda Aceh sebagai pengingat tragedi tersebut. Museum ini dirancang oleh Ridwan Kamil dan menampilkan diorama peristiwa serta daftar nama para korban. Museum ini tidak hanya berfungsi sebagai tempat mengenang, tetapi juga sebagai pusat edukasi kebencanaan.
                            </p>
                        </section>

                        <section class="mb-6">
                            <h2 class="text-2xl font-bold mt-8 mb-4">Cara Menyelamatkan Diri dari Tsunami</h2>
                            <p class="mb-4 text-justify">Berikut 10 cara menyelamatkan diri saat terjadi tsunami, menurut Buku Saku "Tangkap Tangkas Tangguh Menghadapi Bencana" dari BNPB:</p>
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <ul class="list-decimal pl-6 space-y-2">
                                    <li><span class="font-semibold">Waspada Gempa Susulan:</span> Tetap berada di tempat terbuka dan aman setelah gempa utama.</li>
                                    <li><span class="font-semibold">Pergi ke Tempat Tinggi:</span> Segera bawa diri dan keluarga ke tempat yang lebih tinggi.</li>
                                    <li><span class="font-semibold">Jauhi Pantai:</span> Ikuti peringatan bahaya tsunami dari pihak berwenang.</li>
                                    <li><span class="font-semibold">Awas Gelombang Susulan:</span> Bertahan di area tinggi karena gelombang susulan bisa lebih besar.</li>
                                    <li><span class="font-semibold">Pantau Informasi:</span> Terus perbarui informasi dari pihak berwenang.</li>
                                    <li><span class="font-semibold">Jangan Kembali ke Rumah:</span> Tunggu sampai ada pernyataan aman.</li>
                                    <li><span class="font-semibold">Bertahan di Tempat Evakuasi:</span> Tetap di lokasi evakuasi hingga mendapat arahan selanjutnya.</li>
                                    <li><span class="font-semibold">Hindari Jembatan:</span> Jangan melewati jembatan untuk menyelamatkan diri.</li>
                                    <li><span class="font-semibold">Evakuasi dengan Berjalan Kaki:</span> Jika terjadi kemacetan, tinggalkan kendaraan.</li>
                                    <li><span class="font-semibold">Tutup Layar Kapal:</span> Jika berada di kapal, segera tutup layar dan hindari pelabuhan.</li>
                                </ul>
                            </div>
                        </section>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://nasional.kontan.co.id/news/tsunami-aceh-bencana-alam-terbesar-16-tahun-lalu?page=2" class="text-blue-500 hover:underline">Kontan.co.id</a>
                        </p>
                    </article>',
                    'date' => '26 Desember 2020'
                ],
                '2' => [
                    'title' => 'Tsunami dan Gempa Palu Donggala 2018 dalam Angka: Korban, Daya Rusak, dan Lainnya',
                    'image' => 'asset/berita3.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <h1 class="text-3xl font-bold mb-6">Tragedi Gempa dan Tsunami Palu 2018</h1>

                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <h2 class="text-xl font-bold mb-2">Data Singkat:</h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Tanggal: 28 September 2018</li>
                                <li>Waktu: 17.02 WITA</li>
                                <li>Kekuatan: 7,7 SR</li>
                                <li>Lokasi: 27 km timur laut Donggala</li>
                                <li>Kedalaman: 10 km</li>
                            </ul>
                        </div>

                        <p class="mb-6 text-justify">
                            Pada Jumat sore yang nahas, gempa bumi berkekuatan 7,7 SR mengguncang Sulawesi Tengah, memicu rangkaian 
                            bencana berupa tsunami, likuefaksi, dan penurunan tanah yang meluluhlantakkan wilayah Palu, Sigi, 
                            Donggala, dan Parigi Moutong.
                        </p>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Dampak Bencana</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-lg font-bold mb-2">Korban Jiwa:</h3>
                                <ul class="list-disc pl-6">
                                    <li>4.845 orang meninggal dunia</li>
                                    <li>172.999 orang mengungsi</li>
                                    <li>110.214 rumah rusak</li>
                                    <li>Ribuan orang hilang</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-lg font-bold mb-2">Kerugian Ekonomi:</h3>
                                <ul class="list-disc pl-6">
                                    <li>Kota Palu: Rp 8,3 triliun</li>
                                    <li>Kabupaten Sigi: Rp 6,9 triliun</li>
                                    <li>Kabupaten Donggala: Rp 2,7 triliun</li>
                                    <li>Kabupaten Parigi Moutong: Rp 640 miliar</li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Fenomena Bencana</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Bencana ini unik karena melibatkan tiga fenomena sekaligus: gempa bumi, tsunami, dan likuefaksi. 
                                Tsunami setinggi 3-5 meter menyapu pesisir Palu, sementara likuefaksi menyebabkan tanah "mencair" 
                                di beberapa lokasi, termasuk Petobo dan Balaroa yang praktis lenyap ditelan bumi.
                            </p>
                            <p>
                                Likuefaksi terjadi ketika getaran gempa menyebabkan tanah yang mengandung air berubah menjadi 
                                fluida, mengakibatkan bangunan tenggelam dan terseret bersama aliran tanah. Fenomena ini 
                                menambah kompleksitas penanganan bencana dan menjadi pembelajaran berharga bagi ahli geologi.
                            </p>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Respons dan Pemulihan</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Pemerintah Indonesia segera mengerahkan bantuan darurat dan menerima dukungan internasional. 
                                Organisasi kemanusiaan seperti Tzu Chi berkontribusi dengan membangun 3.000 hunian sementara. 
                                Program rehabilitasi dan rekonstruksi dilaksanakan dengan anggaran total Rp 18,48 triliun.
                            </p>
                            <p>
                                Lima tahun pasca bencana, Palu dan sekitarnya telah bangkit kembali meski masih menyisakan 
                                trauma mendalam bagi para penyintas. Kejadian ini menjadi pengingat akan pentingnya mitigasi 
                                bencana dan penataan ruang yang memperhatikan aspek kebencanaan.
                            </p>
                        </div>

                        <p class="text-sm text-gray-600 mt-4">
                            Sumber: <a href="https://www.tempo.co/politik/tsunami-dan-gempa-palu-donggala-2018-dalam-angka-korban-daya-rusak-dan-lainnya-138090" class="text-blue-500 hover:underline">Tempo.co</a>
                        </p>
                    </article>',
                    'date' => '29 September 2023'
                ],
                '3' => [
                    'title' => 'BMKG Ungkap Kronologi Tsunami Selat Sunda 22 Desember 2018',
                    'image' => 'asset/berita4.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <h1 class="text-3xl font-bold mb-6">Tsunami Selat Sunda 2018: Kronologi dan Dampaknya</h1>

                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <h2 class="text-xl font-bold mb-2">Fakta Singkat:</h2>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Tanggal: 22 Desember 2018</li>
                                <li>Waktu: 20:56 WIB</li>
                                <li>Lokasi: Selat Sunda</li>
                                <li>Penyebab: Longsor lereng Gunung Anak Krakatau</li>
                                <li>Area terdampak: Pesisir Banten dan Lampung</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Kronologi Kejadian</h2>
                        <div class="space-y-4 text-justify">
                            <h3 class="text-xl font-bold">21 Desember 2018</h3>
                            <p>PVMBG mendeteksi aktivitas erupsi Gunung Anak Krakatau dengan kolom abu setinggi 400 meter di atas puncak. Status gunung berada di level II (Waspada).</p>

                            <h3 class="text-xl font-bold">22 Desember 2018</h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li><span class="font-semibold">07:00 WIB:</span> BMKG mengeluarkan peringatan dini gelombang tinggi 1,5-2,5 meter untuk wilayah Selat Sunda.</li>
                                <li><span class="font-semibold">20:56 WIB:</span> Erupsi Gunung Anak Krakatau memicu longsor lereng seluas 64 hektar.</li>
                                <li><span class="font-semibold">21:03 WIB:</span> Getaran longsor tercatat di seismograf BMKG Cigeulis, Pandeglang.</li>
                                <li><span class="font-semibold">21:27-21:53 WIB:</span> Gelombang tsunami mencapai berbagai lokasi:</li>
                            </ul>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Pantai Jambu, Serang: 0,9 meter (21:27 WIB)</li>
                                    <li>Pelabuhan Ciwandan: 0,35 meter (21:33 WIB)</li>
                                    <li>Kota Agung, Lampung: 0,36 meter (21:35 WIB)</li>
                                    <li>Pelabuhan Panjang: 0,28 meter (21:53 WIB)</li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Respons BMKG</h2>
                        <div class="space-y-4 text-justify">
                            <p>BMKG mengklarifikasi bahwa sistem peringatan dini tsunami yang ada hanya dirancang untuk mendeteksi tsunami akibat gempa tektonik, bukan aktivitas vulkanik. Pada pukul 22:30 WIB, BMKG mengeluarkan siaran pers yang mengonfirmasi bahwa tsunami tidak dipicu oleh gempa bumi tektonik.</p>
                            
                            <p>Keesokan harinya (23 Desember 2018), BMKG memastikan pusat getaran berada di Gunung Anak Krakatau (115,46 BT - 6,10 LS) dengan kedalaman 1 km dan kekuatan setara magnitudo 3,4. Kejadian ini menjadi pembelajaran berharga tentang pentingnya pengembangan sistem peringatan dini tsunami yang komprehensif, mencakup berbagai pemicu tsunami, baik dari aktivitas tektonik maupun vulkanik.</p>
                        </div>
                        
                        <p class="text-sm text-gray-600 mt-4">
                            Sumber: <a href="https://www.bmkg.go.id/berita/?p=bmkg-ungkap-kronologi-tsunami-selat-sunda&tag=berita-utama&lang=ID" class="text-blue-500 hover:underline">BMKG.go.id</a>
                        </p>
                    </article>',
                    'date' => '31 Desember 2018'
                ],
                '4' => [
                    'title' => '10 Tsunami Terdahsyat di Dunia, 3 di Indonesia',
                    'image' => 'asset/berita5.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <h1 class="text-3xl font-bold mb-6">Tsunami Terdahsyat dalam Sejarah</h1>

                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <p class="font-semibold">Tsunami berasal dari bahasa Jepang:</p>
                            <ul class="list-disc pl-6">
                                <li>"tsu" berarti laut</li>
                                <li>"nami" berarti gelombang</li>
                            </ul>
                        </div>

                        <p class="mb-6 text-justify">
                            Tsunami adalah serangkaian gelombang laut raksasa yang timbul akibat pergeseran di dasar laut yang disebabkan oleh gempa bumi, erupsi gunung api, atau tanah longsor. Indonesia merupakan salah satu negara yang rawan tsunami karena posisinya yang berada di kawasan tektonik aktif, ditekan oleh tiga lempeng tektonik utama: Indo-Australia di selatan, Eurasia di utara, dan Pasifik di timur.
                        </p>

                        <h2 class="text-2xl font-bold mt-8 mb-4">10 Tsunami Terdahsyat Sepanjang Sejarah</h2>

                        <div class="space-y-6">
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">1. Karrat Fjord, Greenland (2017)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 17 Juni 2017</li>
                                    <li>Ketinggian gelombang: 90 meter</li>
                                    <li>Penyebab: Tanah longsor akibat pencairan glasial</li>
                                    <li>Dampak: 4 korban jiwa, 11 bangunan tersapu ke laut</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">2. Pulau Ambon, Indonesia (1674)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 17 Februari 1674</li>
                                    <li>Ketinggian gelombang: 100 meter</li>
                                    <li>Penyebab: Gempa bumi di Kepulauan Maluku</li>
                                    <li>Dampak: Lebih dari 2.000 korban jiwa</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">3. Teluk Lituya, Alaska (1853/1854)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Ketinggian gelombang: 120 meter</li>
                                    <li>Penyebab: Tanah longsor</li>
                                    <li>Lokasi terkenal dengan sejarah megatsunami</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">4. Teluk Lituya, Alaska (1936)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 27 Oktober 1936</li>
                                    <li>Ketinggian gelombang: 149 meter</li>
                                    <li>Kecepatan: 35 km/jam</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">5. Teluk Icy, Alaska (2015)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 17 Oktober 2015</li>
                                    <li>Ketinggian gelombang: 193 meter</li>
                                    <li>Dampak: Menghancurkan area hutan seluas 20 km²</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">6. Bendungan Vajont, Italia (1963)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 9 Oktober 1963</li>
                                    <li>Ketinggian gelombang: 235 meter</li>
                                    <li>Penyebab: Longsor Gunung Toc ke reservoir bendungan</li>
                                    <li>Dampak: Lebih dari 2.000 korban jiwa</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">7. Gunung St. Helens, Washington (1980)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 18 Mei 1980</li>
                                    <li>Ketinggian gelombang: 250 meter</li>
                                    <li>Penyebab: Letusan gunung berapi</li>
                                    <li>Lokasi: Danau Spirit</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">8. Teluk Lituya, Alaska (1958)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 9 Juli 1958</li>
                                    <li>Ketinggian gelombang: 524 meter</li>
                                    <li>Penyebab: Gempa 7,8 SR dan longsoran 90 juta ton batu</li>
                                    <li>Dampak: 5 korban jiwa</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">9. Krakatau, Indonesia (1883)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 27 Agustus 1883</li>
                                    <li>Penyebab: Letusan Gunung Krakatau</li>
                                    <li>Dampak: 36.000 korban jiwa</li>
                                    <li>Area: Jawa Barat dan Sumatra Selatan</li>
                                </ul>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-bold">10. Aceh, Indonesia (2004)</h3>
                                <ul class="list-disc pl-6 mt-2">
                                    <li>Tanggal: 26 Desember 2004</li>
                                    <li>Penyebab: Gempa 9,1-9,3 SR</li>
                                    <li>Ketinggian gelombang: 30 meter</li>
                                    <li>Dampak: Sekitar 280.000 korban jiwa di 14 negara</li>
                                    <li>Status: Tsunami paling mematikan dalam sejarah modern</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://tunashijau.id/2023/03/10-tsunami-terdahsyat-di-dunia-3-di-indonesia/" class="text-blue-500 hover:underline">tunashijau.id</a>
                        </p>
                    </article>',
                    'date' => '9 Maret 2023'
                ],
                '5' => [
                    'title' => 'Daftar Wilayah Berpotensi Terdampak Tsunami Gempa Megathrust, BRIN: Gelombang Bisa sampai Jakarta',
                    'image' => 'asset/ber6.webp',
                    'content' => '<article class="prose lg:prose-xl">
                        <p class="mb-4 text-justify">
                            Badan Riset dan Inovasi Nasional (BRIN) mengungkapkan potensi tsunami akibat gempa Megathrust di Selat Sunda dan Mentawai-Siberut yang dapat mencapai wilayah Jakarta. Penelitian ini menjadi peringatan penting bagi kesiapsiagaan menghadapi bencana di wilayah-wilayah berisiko.
                        </p>

                        <h2 class="text-2xl font-bold mt-8">Potensi Tsunami di Jakarta</h2>
                        <div class="bg-gray-50 p-6 rounded-lg mb-6">
                            <ul class="list-disc">
                                <li>Potensi gempa: Magnitudo 8.0 hingga 9.0</li>
                                <li>Ketinggian tsunami di Jakarta: 2-3 meter</li>
                                <li>Area terdampak: Wilayah padat penduduk</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Daftar Wilayah Berpotensi Terdampak</h2>
                        <div class="space-y-4">
                            <div class="bg-red-50 p-4 rounded-lg">
                                <h3 class="font-bold text-red-700">Status Ekstrem (>20 meter)</h3>
                                <p>Pesisir Barat</p>
                            </div>

                            <div class="bg-orange-50 p-4 rounded-lg">
                                <h3 class="font-bold text-orange-700">Status Fatal (<20 meter)</h3>
                                <p>Tenggamus, Pandeglang</p>
                            </div>

                            <div class="bg-yellow-50 p-4 rounded-lg">
                                <h3 class="font-bold text-yellow-700">Status Awas (<10 meter)</h3>
                                <p>Lampung, Cilegon, Sukabumi, Bengkulu</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h3 class="font-bold text-blue-700">Status Siaga (<3 meter)</h3>
                                <p>Jakarta Utara, Kulonprogo, Bantul, Padang, Pariaman, Denpasar</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="font-bold text-gray-700">Status Waspada (<0,5 meter)</h3>
                                <p>Mataram, Cirebon</p>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Penjelasan Teknis Megathrust</h2>
                        <p class="text-justify mb-4">
                            Megathrust adalah sumber gempa yang terjadi di batas lempeng yang menunjam. Wilayah Megathrust membentang dari Andaman, Sumatra bagian barat, Jawa bagian selatan, hingga Bali dan Lombok di Nusa Tenggara Barat (NTB). Di Selat Sunda, fenomena ini terjadi ketika lempeng Hindia menunjam di bawah Pulau Jawa bagian selatan dan Sumatra.
                        </p>

                        <h2 class="text-2xl font-bold mt-8">Rekomendasi Mitigasi</h2>
                        <div class="p-6 rounded-lg mb-6">
                            <ul class="list-disc">
                                <li>Pemahaman tentang jalur evakuasi</li>
                                <li>Persiapan tas siaga bencana</li>
                                <li>Partisipasi dalam simulasi evakuasi</li>
                                <li>Pemantauan informasi dari BMKG</li>
                                <li>Koordinasi dengan pihak berwenang setempat</li>
                            </ul>
                        </div>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://jatim.tribunnews.com/2024/08/25/daftar-wilayah-berpotensi-terdampak-tsunami-gempa-megathrust-brin-gelombang-bisa-sampai-jakarta" class="text-blue-500 hover:underline">jatim.tribunnews.com</a>
                        </p>
                    </article>',
                    'date' => '25 Agustus 2024'
                ],
                '6' => [
                    'title' => 'Pembangunan Aceh Setelah 20 Tahun Berlalu Pasca Tsunami',
                    'image' => 'asset/berita7.jpeg',
                    'content' => '<article class="prose lg:prose-xl">
                        <h1 class="text-3xl font-bold mb-6">Transformasi Aceh: 19 Tahun Setelah Tsunami</h1>

                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <h2 class="text-xl font-bold mb-2">Fakta Singkat:</h2>
                            <ul class="list-disc pl-6">
                                <li>Tanggal Tsunami: 26 Desember 2004</li>
                                <li>Magnitudo Gempa: 9,1 SR</li>
                                <li>Periode Rehabilitasi: 2005-2011</li>
                                <li>Koordinator: BRR NAD-Nias</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Perkembangan Kota Pasca Tsunami</h2>
                        <p class="text-justify mb-4">
                            Setelah 19 tahun berlalu, Aceh telah mengalami transformasi signifikan dari wilayah yang porak-poranda akibat tsunami menjadi kota modern yang berkembang. Perkembangan ini ditandai dengan konversi area pertanian menjadi kawasan terbangun dan ekspansi wilayah perkotaan yang sejalan dengan pertumbuhan populasi.
                        </p>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Program Rehabilitasi dan Rekonstruksi</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Periode 2005-2011 menjadi masa krusial dalam pemulihan Aceh. BRR NAD-Nias mengkoordinir program rehabilitasi yang mencakup berbagai sektor vital:
                            </p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Pembangunan kembali perumahan</li>
                                <li>Rehabilitasi sarana pendidikan</li>
                                <li>Pemulihan fasilitas kesehatan</li>
                                <li>Perbaikan infrastruktur jalan</li>
                                <li>Pemulihan akses air bersih</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Pembangunan Sektor Transportasi</h2>
                        <div class="space-y-4 text-justify">
                            <h3 class="text-xl font-bold">1. Transportasi Laut</h3>
                            <ul class="list-disc pl-6">
                                <li>Rehabilitasi Pelabuhan Ulee Lheue (2005)</li>
                                <li>Pembangunan 3 kapal Aceh Hebat (2019-2020)</li>
                                <li>Pengembangan terminal penyeberangan</li>
                            </ul>

                            <h3 class="text-xl font-bold">2. Transportasi Darat</h3>
                            <ul class="list-disc pl-6">
                                <li>Program angkutan massal Trans Koetaraja</li>
                                <li>Pengembangan jalur kereta api Trans Sumatera</li>
                                <li>Peningkatan konektivitas antar wilayah</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Dampak Ekonomi dan Sosial</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Pembangunan infrastruktur transportasi telah mendorong pertumbuhan ekonomi Aceh melalui:
                            </p>
                            <ul class="list-disc pl-6">
                                <li>Peningkatan distribusi barang dan jasa</li>
                                <li>Pengembangan sektor pariwisata</li>
                                <li>Perbaikan konektivitas antar wilayah</li>
                                <li>Peningkatan mobilitas masyarakat</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Pembelajaran dan Mitigasi Bencana</h2>
                        <p class="text-justify mb-4">
                            Pengalaman tsunami telah mengajarkan pentingnya kesiapsiagaan bencana. Aceh kini memiliki sistem mitigasi yang lebih baik, meliputi:
                        </p>
                        <ul class="list-disc pl-6 mb-6">
                            <li>Pembangunan dinding laut (seawall)</li>
                            <li>Sistem peringatan dini tsunami</li>
                            <li>Program edukasi masyarakat</li>
                            <li>Pemetaan zona rawan bencana</li>
                            <li>Jalur evakuasi yang terencana</li>
                        </ul>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://dishub.acehprov.go.id/pembangunan-aceh-setelah-19-tahun-berlalu-pasca-tsunami/" class="text-blue-500 hover:underline">dishub.acehprov.go.id</a>
                        </p>
                    </article>',
                    'date' => '5 Januari 2024'
                ],
                '7' => [
                    'title' => 'Indonesia Rujukan Global Pengembangan Sistem Peringatan Dini Tsunami',
                    'image' => 'asset/berita8.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <h1 class="text-3xl font-bold mb-6">Indonesia: Pionir Sistem Peringatan Dini Tsunami Global</h1>

                        <div class="p-6 rounded-lg mb-4">
                            <h2 class="text-xl font-bold mb-2">Pencapaian Utama:</h2>
                            <ul class="list-disc">
                                <li>Pengembangan Ina-TEWS (Indonesia Early Warning System)</li>
                                <li>Integrasi teknologi modern dengan kearifan lokal</li>
                                <li>Sistem peringatan dini yang responsif</li>
                                <li>Pelibatan aktif masyarakat lokal</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mb-4">Pengakuan Internasional</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Dalam acara "Second UNESCO-IOC Global Tsunami Symposium" di Banda Aceh, Indonesia mendapat pengakuan internasional atas keunggulannya dalam mengembangkan sistem peringatan dini tsunami. Temily Isabella Baker dari UN ESCAP memberikan apresiasi khusus terhadap pendekatan komprehensif Indonesia yang memadukan teknologi modern dengan kearifan lokal.
                            </p>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Keunggulan Sistem Ina-TEWS</h2>
                        <div class="space-y-4 text-justify">
                            <ul class="list-disc pl-6">
                                <li>Deteksi dini yang akurat dan cepat</li>
                                <li>Sistem peringatan yang disesuaikan dengan kondisi lokal</li>
                                <li>Jaringan sensor yang tersebar di seluruh wilayah</li>
                                <li>Integrasi dengan sistem komunikasi darurat</li>
                                <li>Pemantauan real-time 24/7</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Peran Masyarakat Lokal</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Keberhasilan sistem ini didukung oleh partisipasi aktif masyarakat lokal melalui:
                            </p>
                            <ul class="list-disc pl-6">
                                <li>Pelatihan tanggap darurat rutin</li>
                                <li>Simulasi evakuasi berkala</li>
                                <li>Pembentukan komunitas siaga bencana</li>
                                <li>Edukasi berkelanjutan tentang mitigasi tsunami</li>
                            </ul>
                        </div>

                        <h2 class="text-2xl font-bold mt-8 mb-4">Dampak Global</h2>
                        <div class="space-y-4 text-justify">
                            <p>
                                Model yang dikembangkan Indonesia kini menjadi rujukan bagi negara-negara lain dalam:
                            </p>
                            <ul class="list-disc pl-6">
                                <li>Pengembangan sistem peringatan dini</li>
                                <li>Penguatan ketahanan masyarakat</li>
                                <li>Integrasi teknologi dengan kearifan lokal</li>
                                <li>Pemberdayaan komunitas dalam mitigasi bencana</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-bold mb-4">Rencana Pengembangan Ke Depan</h2>
                            <ul class="list-disc">
                                <li>Peningkatan akurasi deteksi</li>
                                <li>Perluasan jaringan sensor</li>
                                <li>Penguatan sistem komunikasi</li>
                                <li>Peningkatan kapasitas SDM</li>
                                <li>Kolaborasi internasional yang lebih luas</li>
                            </ul>
                        </div>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://www.beritasatu.com/network/suarakalbar/360327/indonesia-rujukan-global-pengembangan-sistem-peringatan-dini-tsunami" class="text-blue-500 hover:underline">beritasatu.com</a>
                        </p>
                    </article>',
                    'date' => '11 November 2024'
                ],
                '8' => [
                    'title' => 'Tak Bisa Diprediksi, Yang Terpenting Adalah Mitigasi Bencana Gempa Bumi dan Tsunami',
                    'image' => 'asset/berita9.jpeg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <section class="mb-6">
                            <p><strong>BANDUNG</strong> – Indonesia terletak di pertemuan tiga lempeng tektonik aktif dunia (Indo-Australia, Pasifik, dan Eurasia), yang menyebabkan tingginya potensi bencana geologi seperti gempa bumi yang dapat memicu tsunami. Hal ini bergantung pada kekuatan gempa, lokasi pusat gempa, dan kedalamannya.</p>
                        </section>

                        <section class="mb-6">
                            <p>"Tsunami dapat disebabkan oleh tiga faktor utama, yaitu gempa bumi (hampir 80%), erupsi gunung api, dan longsor bawah laut. Agar tsunami terjadi, gempa harus memiliki magnitudo besar, berlokasi di laut, dan kedalaman dangkal," ungkap <strong>Kepala Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG)</strong>, Kasbani, dalam konferensi pers di Bandung.</p>
                        </section>

                        <blockquote class="border-l-4 border-blue-500 pl-4 italic my-4">
                            "Tsunami tidak dapat diprediksi kapan terjadinya, kecuali gempanya sudah terjadi. Potensi tsunami selalu mungkin terjadi di pantai-pantai wilayah Jawa, Sumatera, dan Nusa Tenggara. Yang terpenting adalah kesiapsiagaan kita dalam mitigasi bencana geologi," – Kasbani.
                        </blockquote>

                        <section class="mb-6">
                            <p>Menurut Kasbani, Badan Geologi telah melakukan berbagai upaya mitigasi, termasuk penelitian endapan tsunami untuk memahami jejak sejarah tsunami sebelumnya, penyusunan <strong>Peta Kawasan Rawan Bencana (KRB) Tsunami</strong> yang dibuat dengan pemodelan numerik, serta sosialisasi untuk meningkatkan pemahaman dan kesiapan masyarakat.</p>
                        </section>

                        <section class="mb-6">
                            <p>"Kami membuat peta kawasan rawan bencana tsunami berdasarkan kejadian yang pernah terjadi di suatu daerah, serta potensi ke depan. Selain itu, peningkatan kapasitas masyarakat melalui pelatihan adalah kunci," tambah Kasbani. Ia menekankan bahwa hutan pantai dan gumuk pasir bisa berfungsi sebagai pemecah gelombang alami, dan pemanfaatan ini perlu didukung dalam tata ruang wilayah.</p>
                        </section>

                        <section class="mb-6">
                            <p>Dalam kurun waktu 27 tahun (1990-2017), Indonesia mengalami setidaknya 166 gempa bumi merusak, dengan 16 di antaranya memicu tsunami. Badan Geologi bekerja sama dengan BMKG, BNPB, BPBD, serta instansi terkait dalam mengirimkan <strong>Tim Tanggap Darurat</strong> ke lokasi bencana sebagai bagian dari upaya mitigasi.</p>
                        </section>

                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://www.esdm.go.id/id/media-center/news-archives/tak-bisa-diprediksi-yang-terpenting-adalah-mitigasi-bencana-gempa-bumi-dan-tsunami" class="text-blue-500 hover:underline">esdm.go.id</a>
                        </p>
                    </article>',
                    'date' => '6 April 2018'
                ],
                '9' => [
                    'title' => 'Tanggap Bencana, BPBD Bantul Gelar Simulasi Penanggulangan Tsunami',
                    'image' => 'asset/berita10.jpg',
                    'content' => '
                    <article class="prose lg:prose-xl">
                        <section class="mb-6">
                            <p>Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bantul sukses menggelar simulasi penanggulangan bencana alam tsunami di Lapangan Sorobayan, Desa Gadingsari, Kecamatan Sanden, Bantul, pada Sabtu (29/6). Lebih dari 2.000 warga antusias mengikuti simulasi ini, menunjukkan tingginya kesadaran masyarakat akan pentingnya kesiapsiagaan.</p>
                        </section>
                        <section class="mb-6">
                            <p><strong>Bupati Bantul, Drs. H. Suharsono</strong>, menyampaikan apresiasinya atas terselenggaranya kegiatan ini. Beliau menekankan bahwa hidup di wilayah rawan bencana seperti Bantul menuntut kewaspadaan dan kesiapan setiap saat. "Bencana alam bisa datang tanpa peringatan, sehingga penting bagi kita untuk selalu siap siaga," ujar Suharsono.</p>
                        </section>
                        <blockquote class="border-l-4 border-blue-500 pl-4 italic my-4">
                            "Pengalaman bencana alam yang merenggut banyak korban jiwa beberapa tahun lalu mengingatkan kita akan pentingnya mitigasi bencana. Pengetahuan tentang kesiapsiagaan harus terus disosialisasikan kepada masyarakat," - Drs. H. Suharsono.
                        </blockquote>
                        <section class="mb-6">
                            <p>Bupati juga menekankan pentingnya edukasi dan gotong royong. "Suka tidak suka, kita tinggal di wilayah rawan bencana. Namun, dengan kesiapsiagaan dan semangat kebersamaan, kita bisa menghadapinya dengan tanggap," tambahnya.</p>
                        </section>
                        <section class="mb-6">
                            <p><strong>Kepala BPBD Bantul, Dwi Daryanto</strong>, juga menyampaikan kebanggaannya atas partisipasi masyarakat. "Antusiasme warga dalam simulasi ini sangat membanggakan. Kami akan terus berkomitmen memberikan sosialisasi berkelanjutan terkait kebencanaan agar masyarakat semakin siap menghadapi berbagai kemungkinan," kata Dwi.</p>
                        </section>
                        <section class="mb-6">
                            <p>Kegiatan ini diharapkan dapat meningkatkan pemahaman dan kesiapsiagaan warga dalam menghadapi ancaman bencana, khususnya tsunami. Dengan pelatihan rutin seperti ini, risiko dan kerugian yang ditimbulkan dapat diminimalisasi saat bencana terjadi.</p>
                        </section>
                        <p class="text-sm text-gray-600">
                            Sumber: <a href="https://bantulkab.go.id/berita/detail/3971.html#:~:text=Diskominfo%20-%20Bertempat%20di%20Lapangan%20Sorobayan%20Desa%20Gadingsari,warga%20Gadingsari%20mengikuti%20jalannya%20simulasi%20penanggulangan%20kebencanaan%20tersebut." class="text-blue-500 hover:underline">bantulkab.go.id</a>
                        </p>
                    </article>',
                    'date' => '26 Juli 2019'
                ]
            ];

            if (isset($berita[$berita_id])) {
                $article = $berita[$berita_id];
                ?>
                <h1 class="text-3xl font-bold mb-4"><?php echo $article['title']; ?></h1>
                <div class="text-gray-600 mb-4"><?php echo $article['date']; ?></div>
                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>"
                    class="w-full h-96 object-cover rounded-lg mb-6">
                <div class="prose max-w-none">
                    <?php echo $article['content']; ?>
                </div>
                <?php
            } else {
                echo '<p class="text-xl">Berita tidak ditemukan.</p>';
            }
            ?>
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