<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsunami Warning Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-white shadow p-4 flex items-center justify-between">
        <!-- Tsunami Warning Section -->
        <div class="text-red-600 font-bold text-lg flex items-center">
            <span>PERINGATAN TSUNAMI!</span>
            <div class="ml-4 text-black">
                <!-- Display the alert data dynamically -->
                <?php
                // Assuming alert data is available
                $magnitude = "7.6";
                $alert_date = "02-03-2021";
                $alert_time = "07:30:30 WIB";
                $location = "Enggano - Bengkulu";

                echo "<span class='block'>M $magnitude - $alert_date - $alert_time</span>";
                echo "<span class='block text-red-600'>Lokasi: $location</span>";
                ?>
            </div>
        </div>

        <!-- User Role Section -->
        <div class="flex items-center space-x-4">
            <span class="font-semibold text-lg">Scientist</span>
            <!-- User Icon or Avatar (optional) -->
            <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full">
        </div>
    </header>
</body>
</html>
