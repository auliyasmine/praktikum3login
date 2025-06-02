<?php
// Ambil data dari form
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

// Cek apakah form lengkap
if (empty($nama) || empty($email)) {
    // Redirect ke halaman error jika data tidak lengkap
    header("Location: error.php");
    exit();
} else {
    // Simpan data ke session untuk digunakan di dashboard
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['waktu_login'] = date('H:i:s');
    $_SESSION['hari'] = date('l');
    $_SESSION['tanggal'] = date('d-m-Y');

    // Redirect ke halaman dashboard
    header("Location: dashboard.php");
    exit();
}
?>

