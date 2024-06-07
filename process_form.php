<?php
$servername = "localhost"; // biasanya tetap "localhost" atau bisa juga "127.0.0.1"
$username = "u101679989_faizul"; // ganti dengan username database Anda
$password = "Upnjaya25"; // ganti dengan password database Anda
$dbname = "u101679989_contact_form"; // ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$message = $_POST['message'];

// Menyimpan data ke database menggunakan prepared statement
$stmt = $conn->prepare("INSERT INTO messages (first_name, last_name, mobile_number, email, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $first_name, $last_name, $mobile_number, $email, $message);

if ($stmt->execute()) {
    // Redirect ke halaman utama setelah sukses
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
