<?php
session_start();

// Cek apakah user sudah login, kalau belum redirect ke login
if (!isset($_SESSION['nama']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$hari = $_SESSION['hari'];
$tanggal = $_SESSION['tanggal'];
$waktu = $_SESSION['waktu_login'];
?>

<?php include 'partials/header.php'; ?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow border-0 rounded-4 animate bg-light-pink">
        <div class="card-body p-5">
          <h2 class="text-center text-pink fw-bold mb-4">Selamat Datang, <?= htmlspecialchars($nama) ?>! 🎉</h2>
          <ul class="list-group list-group-flush fs-5">
            <li class="list-group-item">📧 Email: <strong><?= htmlspecialchars($email) ?></strong></li>
            <li class="list-group-item">📅 Hari: <strong><?= $hari ?></strong></li>
            <li class="list-group-item">🗓️ Tanggal: <strong><?= $tanggal ?></strong></li>
            <li class="list-group-item">⏰ Jam Login: <strong><?= $waktu ?></strong></li>
          </ul>
          <div class="text-center mt-4">
            <a href="login.php" class="btn btn-outline-pink">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>

