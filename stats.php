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
    </style>
</head>

<body class="body" onload="startTime()">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
                        if (i < 10) { i = "0" + i };
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
                    class="hover:ml-4 w-full text-white bg-blue-600 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
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
                class="justify-end pr-4 ml-1 text-white hover:bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <a href="stats.php"
                class="justify-end pr-4 ml-1 text-white bg-blue-700 p-3 rounded-full transform ease-in-out duration-300 flex">
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
    <div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
        <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
        <div class="flex-grow p-6">
            <div id="container"></div>
            <script>(async () => {

                    const topology = await fetch(
                        'https://code.highcharts.com/mapdata/countries/id/id-all.topo.json'
                    ).then(response => response.json());

                    // Prepare demo data. The data is joined to map using value of 'hc-key'
                    // property by default. See API docs for 'joinBy' for more info on linking
                    // data and map.
                    const data = [
                        ['id-3700', 10, 'Riau'],
                        ['id-ac', 11, 'Aceh'],
                        ['id-jt', 12, 'Jawa Tengah'],
                        ['id-be', 13, 'Bengkulu'],
                        ['id-bt', 14, 'Banten'],
                        ['id-kb', 15, 'Kalimantan Barat'],
                        ['id-bb', 16, 'Bangka Belitung'],
                        ['id-ba', 17, 'Bali'],
                        ['id-ji', 18, 'Jawa Timur'],
                        ['id-ks', 19, 'Kalimantan Selatan'],
                        ['id-nt', 20, 'NTT'],
                        ['id-se', 21, 'Sulawesi Selatan'],
                        ['id-kr', 22, 'Kepulauan Riau'],
                        ['id-ib', 23, 'Irian jaya'],
                        ['id-su', 24, 'Sumatra Utara'],
                        ['id-ri', 25, 'Riau'],
                        ['id-sw', 26, 'Sulawesi Utara'],
                        ['id-ku', 27, 'Kepulauan Bangka Belitung'],
                        ['id-la', 28, 'Maluku utara'],
                        ['id-sb', 29, 'Sumatra Barat'],
                        ['id-ma', 30, 'Maluku'],
                        ['id-nb', 31, 'NTB'],
                        ['id-sg', 32, 'Sulawesi Tenggara'],
                        ['id-st', 33, 'Sulawesi Tengah'],
                        ['id-pa', 34, 'Papua'],
                        ['id-jr', 35, 'Jawa Barat'],
                        ['id-ki', 36, 'Kalimantan timur'],
                        ['id-1024', 37, 'Lampung'],
                        ['id-jk', 38, 'DKI Jakarta'],
                        ['id-go', 39, 'Gorontalo'],
                        ['id-yo', 40, 'DI Yogyakarta'],
                        ['id-sl', 41, 'Sumatra Selatan'],
                        ['id-sr', 42, 'Sulawesi Barat'],
                        ['id-ja', 43, 'Jambi'],
                        ['id-kt', 44, 'Kalimantan Tengah']
                    ];

                    // Create the chart
                    Highcharts.mapChart('container', {
                        chart: {
                            map: topology
                        },

                        title: {
                            text: ''
                        },

                        mapNavigation: {
                            enabled: true,
                            buttonOptions: {
                                verticalAlign: 'bottom'
                            }
                        },

                        plotOptions: {
                            series: {
                                color: '#88a4bc'
                            },
                            mapbubble: {
                                color: '#dc2626'
                            }
                        },

                        series: [{
                            data: data,
                            name: 'Jumlah bencana',
                            states: {
                                hover: {
                                    color: '#3b729f'
                                }
                            },
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }, {
                            // Bubble series
                            type: 'mapbubble',
                            name: 'Potensi tsunami',
                            joinBy: ['hc-key', 'code'],
                            data: [
                                { code: 'id-ac', z: 200 },
                                { code: 'id-jt', z: 300 },
                                { code: 'id-be', z: 400 },
                                { code: 'id-bt', z: 500 },
                                { code: 'id-kb', z: 600 },
                                { code: 'id-bb', z: 700 },
                                { code: 'id-ba', z: 800 },
                                { code: 'id-ji', z: 900 },
                                { code: 'id-ks', z: 1000 }
                            ],
                            minSize: 4,
                            maxSize: '12%',
                            tooltip: {
                                pointFormat: '{point.code}: {point.z} thousands'
                            },
                        }]
                    });

                })();
            </script>
            <!-- Data Tables and Graphs -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Latest Tsunami Data -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-semibold text-lg mb-4">Tsunami Terbaru</h2>
                    <ul>
                        <li>M 7.2 - 02-03-2021 - 07:30:30 WIB - 12 km Enggano - Bengkulu</li>
                        <li>M 5.1 - 01-03-2021 - 08:15:30 WIB - 11 km Sumur - Banten</li>
                        <li>M 4.7 - 28-02-2021 - 06:45:20 WIB - 15 km Toli Toli - Sulawesi Tengah</li>
                        <li>M 4.8 - 27-02-2021 - 10:15:10 WIB - 18 km Jayapura - Papua</li>
                    </ul>
                </div>

                <!-- Tsunami Graph -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-semibold text-lg mb-4">Jumlah kejadian tsunami di Indonesia</h2>
                    <div class="relative">
                        <!-- <div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6"> -->
                        <div class="flex justify-between">
                            <div>
                                <h5 class="leading-none text-3xl font-bold text-red-700  pb-2">
                                <?php
                                // Example data for the sum series
                                $tsunami_data = [
                                    1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 2, 1, 1, 1, 1, 2, 1, 1, 1, 2, 4, 1, 5, 1, 1, 1, 1, 1, 2, 1, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 2, 1, 1, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 1, 1, 5, 1, 2, 1, 3, 2, 2, 1, 2, 6, 2, 2, 1, 1, 5, 1, 2, 2
                                ];

                                // Calculate the sum of the series
                                $sum_series = array_sum($tsunami_data);

                                // Output the sum
                                echo $sum_series;
                                ?>
                                </h5>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Bencana tsunami
                                </p>
                            </div>
                        </div>
                        <div id="area-chart"></div>
                        <div
                            class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                            <div class="flex justify-between items-center pt-5">
                                <!-- Button -->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                    data-dropdown-placement="bottom"
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                    type="button">
                                    Riwayat kejadian tsunami
                                </button>

                            </div>
                        </div>
                    </div>
                    <script>
                        const options = {
                            chart: {
                                height: "100%",
                                maxWidth: "100%",
                                type: "area",
                                fontFamily: "Inter, sans-serif",
                                dropShadow: {
                                    enabled: false,
                                },
                                toolbar: {
                                    show: false,
                                },
                            },
                            tooltip: {
                                enabled: true,
                                x: {
                                    show: false,
                                },
                            },
                            fill: {
                                type: "gradient",
                                gradient: {
                                    opacityFrom: 0.55,
                                    opacityTo: 0,
                                    shade: "#1C64F2",
                                    gradientToColors: ["#1C64F2"],
                                },
                            },
                            dataLabels: {
                                enabled: false,
                            },
                            stroke: {
                                width: 6,
                            },
                            grid: {
                                show: false,
                                strokeDashArray: 4,
                                padding: {
                                    left: 2,
                                    right: 2,
                                    top: 0
                                },
                            },
                            series: [
                                {
                                    name: "Kejadian Tsunami",
                                    data: [1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 4
                                        , 1
                                        , 5
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 3
                                        , 3
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 2
                                        , 2
                                        , 1
                                        , 1
                                        , 2
                                        , 1
                                        , 1
                                        , 1
                                        , 5
                                        , 1
                                        , 2
                                        , 1
                                        , 3
                                        , 2
                                        , 2
                                        , 1
                                        , 2
                                        , 6
                                        , 2
                                        , 2
                                        , 1
                                        , 1
                                        , 5
                                        , 1
                                        , 2
                                        , 2], //diisi jumlah tsunami
                                    color: "#1A56DB",
                                },
                            ],
                            xaxis: {
                                categories: ["1608",
                                    "1629",
                                    "1673",
                                    "1674",
                                    "1708",
                                    "1710",
                                    "1711",
                                    "1754",
                                    "1763",
                                    "1770",
                                    "1775",
                                    "1797",
                                    "1815",
                                    "1818",
                                    "1820",
                                    "1833",
                                    "1841",
                                    "1843",
                                    "1845",
                                    "1846",
                                    "1851",
                                    "1852",
                                    "1854",
                                    "1855",
                                    "1856",
                                    "1857",
                                    "1859",
                                    "1860",
                                    "1861",
                                    "1864",
                                    "1871",
                                    "1876",
                                    "1882",
                                    "1883",
                                    "1885",
                                    "1889",
                                    "1891",
                                    "1892",
                                    "1899",
                                    "1900",
                                    "1907",
                                    "1908",
                                    "1914",
                                    "1917",
                                    "1921",
                                    "1927",
                                    "1928",
                                    "1930",
                                    "1931",
                                    "1936",
                                    "1938",
                                    "1939",
                                    "1948",
                                    "1950",
                                    "1957",
                                    "1964",
                                    "1965",
                                    "1967",
                                    "1968",
                                    "1969",
                                    "1977",
                                    "1979",
                                    "1981",
                                    "1983",
                                    "1992",
                                    "1994",
                                    "1995",
                                    "1996",
                                    "2000",
                                    "2004",
                                    "2005",
                                    "2006",
                                    "2007",
                                    "2008",
                                    "2009",
                                    "2010",
                                    "2012",
                                    "2014",
                                    "2016",
                                    "2018",
                                    "2019",
                                    "2021",
                                    "2023"], // diisi range waktu tsunami
                                labels: {
                                    show: false,
                                },
                                axisBorder: {
                                    show: false,
                                },
                                axisTicks: {
                                    show: false,
                                },
                            },
                            yaxis: {
                                show: false,
                            },
                        }

                        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
                            const chart = new ApexCharts(document.getElementById("area-chart"), options);
                            chart.render();
                        }
                    </script>
                    <!-- Placeholder for graph -->
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>