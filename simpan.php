<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Handle Contact Form
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pesan'])) {
        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

        $query = "INSERT INTO user (username, email, pesan) VALUES ('$username', '$email', '$pesan')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
        } else {
            echo "Gagal menyimpan: " . mysqli_error($koneksi);
        }
    }

    // Handle Booking Form
    if (isset($_POST['nama']) && isset($_POST['checkin'])) {
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $checkin = mysqli_real_escape_string($koneksi, $_POST['checkin']);
        $checkout = mysqli_real_escape_string($koneksi, $_POST['checkout']);
        $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
        $tamu = (int)$_POST['tamu'];

        $query = "INSERT INTO booking (nama, checkin, checkout, kelas, tamu) VALUES ('$nama', '$checkin', '$checkout', '$kelas', $tamu)";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Booking berhasil! Kami akan menghubungi Anda segera.'); window.location.href='index.php';</script>";
        } else {
            echo "Gagal booking: " . mysqli_error($koneksi);
        }
    }

    // Handle Rating Form
    if (isset($_POST['rating']) && isset($_POST['nama_rating'])) {
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama_rating']);
        $rating = (int)$_POST['rating'];
        $komentar = mysqli_real_escape_string($koneksi, $_POST['komentar'] ?? '');

        $query = "INSERT INTO rating (nama, rating, komentar) VALUES ('$nama', $rating, '$komentar')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Rating berhasil dikirim!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal mengirim rating: ' . mysqli_error($koneksi)]);
        }
        exit;
    }
}
?>