<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsunami";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Handle status update
if (isset($_POST['update_status'])) {
    $kode_profil = $_POST['kode_profil'];
    $status = $_POST['status'];

    $sql = "UPDATE orang_hilang SET status = ? WHERE kode_profil = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $kode_profil);

    if ($stmt->execute()) {
        header("Location: admin.php?success=1");
        exit();
    } else {
        header("Location: admin.php?error=1");
        exit();
    }
}

// Add logout handler
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

// Fetch all missing persons data
$sql = "SELECT kode_profil, nama_orang, foto, status FROM orang_hilang ORDER BY kode_profil DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SIMB Tsunami</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-500 to-blue-700 min-h-screen">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold">SIMB Tsunami Kelompok 8 - Admin</span>
                </div>
                <div class="flex items-center">
                    <form method="POST">
                        <button type="submit" name="logout"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-6">Update Status Orang Hilang</h1>

                <?php if (isset($_GET['success'])): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        Status berhasil diperbarui
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        Terjadi kesalahan saat memperbarui status
                    </div>
                <?php endif; ?>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Foto
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['foto']); ?>"
                                            class="h-16 w-16 object-cover rounded-full"
                                            alt="Foto <?php echo $row['nama_orang']; ?>">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900"><?php echo $row['nama_orang']; ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            <?php echo $row['status'] == 'ditemukan' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?>">
                                            <?php echo $row['status']; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <form method="POST" class="inline">
                                            <input type="hidden" name="kode_profil"
                                                value="<?php echo $row['kode_profil']; ?>">
                                            <input type="hidden" name="status"
                                                value="<?php echo $row['status'] == 'ditemukan' ? 'belum ditemukan' : 'ditemukan'; ?>">
                                            <button type="submit" name="update_status" class="<?php echo $row['status'] == 'ditemukan'
                                                ? 'bg-red-500 hover:bg-red-700'
                                                : 'bg-green-500 hover:bg-green-700'; ?> 
                                                    text-white font-bold py-2 px-4 rounded transition duration-300">
                                                <?php echo $row['status'] == 'ditemukan' ? 'Tandai Belum Ditemukan' : 'Tandai Ditemukan'; ?>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>