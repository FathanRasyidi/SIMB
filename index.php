<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsunami Warning Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Sidebar -->
    <div class="flex h-screen bg-gray-100">
        <div class="w-16 bg-gradient-to-r from-blue-900 to-blue-500 text-white flex flex-col items-center py-6">
            <nav class="flex flex-col w-full items-center">
                <a href="#" class="mb-4 text-lg"><i class="fas fa-home"></i> Home</a>
                <a href="#" class="mb-4 text-lg"><i class="fas fa-bell"></i> Alerts</a>
                <a href="#" class="mb-4 text-lg"><i class="fas fa-chart-line"></i> Statistics</a>
                <a href="#" class="mb-4 text-lg"><i class="fas fa-cog"></i> Settings</a>
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
                    <h2 class="font-semibold text-lg mb-4">Jumlah Gempa Berdasarkan Bulan</h2>
                    <div class="relative">
                        <!-- Placeholder for graph -->
                        <img src="graph-placeholder.jpg" alt="Monthly Earthquake Graph" class="w-full rounded-lg">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-4 mt-6">
                <h2 class="font-semibold text-lg mb-4">Jumlah Gempa Berdasarkan Magnitude</h2>
                <div class="relative">
                    <!-- Placeholder for bar chart -->
                    <img src="bar-chart-placeholder.jpg" alt="Magnitude Bar Chart" class="w-full rounded-lg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
