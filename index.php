<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMB Tsunami</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
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

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <!-- Sidebar -->
  <div class="flex h-screen bg-gray-100">
    <div class="w-24 bg-gradient-to-r from-blue-900 to-blue-500 text-white flex flex-col items-center py-6">
      <nav class="flex flex-col w-full items-center">
        <a class="flex flex-col items-center px-3 py-2 text-white transition-colors duration-300 transform rounded-lg hover:bg-gray-200 hover:text-gray-700"
          href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
          </svg>
          <span class="mt-2 text-sm">Home</span>
        </a>
        <a class="flex flex-col items-center px-3 py-2 text-white transition-colors duration-300 transform rounded-lg hover:bg-gray-200 hover:text-gray-700"
          href="pasien.php">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
          <span class="mt-2 text-sm">Statistics</span>
        </a>
        <a class="flex flex-col items-center px-3 py-2 text-white transition-colors duration-300 transform rounded-lg hover:bg-gray-200 hover:text-gray-700"
          href="akun_pasien.php">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8 group-hover:text-indigo-400">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
          </svg>
          <span class="mt-2 text-sm text-center">Orang Hilang</span>
        </a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-6">
      <!-- Header -->
      <div class="flex items-center justify-end mb-6">
        <div class="text-red-600 font-bold text-lg">
          PERINGATAN TSUNAMI! <br>
          <span class="text-black">M 7.6 - 02-03-2021 - 07:30:30 WIB</span>
        </div>
      </div>
      <div id="container"></div>
      <script>(async () => {

          const topology = await fetch(
            'https://code.highcharts.com/mapdata/countries/id/id-all.topo.json'
          ).then(response => response.json());

          // Prepare demo data. The data is joined to map using value of 'hc-key'
          // property by default. See API docs for 'joinBy' for more info on linking
          // data and map.
          const data = [
            ['id-3700', 10], ['id-ac', 11], ['id-jt', 12], ['id-be', 13],
            ['id-bt', 14], ['id-kb', 15], ['id-bb', 16], ['id-ba', 17],
            ['id-ji', 18], ['id-ks', 19], ['id-nt', 20], ['id-se', 21],
            ['id-kr', 22], ['id-ib', 23], ['id-su', 24], ['id-ri', 25],
            ['id-sw', 26], ['id-ku', 27], ['id-la', 28], ['id-sb', 29],
            ['id-ma', 30], ['id-nb', 31], ['id-sg', 32], ['id-st', 33],
            ['id-pa', 34], ['id-jr', 35], ['id-ki', 36], ['id-1024', 37],
            ['id-jk', 38], ['id-go', 39], ['id-yo', 40], ['id-sl', 41],
            ['id-sr', 42], ['id-ja', 43], ['id-kt', 44]
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

            colorAxis: {
              min: 0
            },

            series: [{
              data: data,
              name: 'Jumlah bencana',
              states: {
                hover: {
                  color: '#BADA55'
                }
              },
              dataLabels: {
                enabled: true,
                format: '{point.name}'
              }
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

        <!-- Earthquake Graph -->
        <div class="bg-white rounded-lg shadow p-4">
          <h2 class="font-semibold text-lg mb-4">Jumlah korban jiwa</h2>
          <div class="relative">
            <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
              <div class="flex justify-between">
                <div>
                  <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">32.4k</h5>
                  <p class="text-base font-normal text-gray-500 dark:text-gray-400">Korban this decade</p>
                </div>
                <div
                  class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                  12%
                  <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 13V1m0 0L1 5m4-4 4 4" />
                  </svg>
                </div>
              </div>
              <div id="area-chart"></div>
              <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                <div class="flex justify-between items-center pt-5">
                  <!-- Button -->
                  <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 10 years
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div id="lastDaysdropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                      <li>
                        <a href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                      </li>
                      <li>
                        <a href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                      </li>
                      <li>
                        <a href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7
                          days</a>
                      </li>
                      <li>
                        <a href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
                          days</a>
                      </li>
                      <li>
                        <a href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
                          days</a>
                      </li>
                    </ul>
                  </div>
                  <a href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Users Report
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Placeholder for graph -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>