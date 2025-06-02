<?php include 'partials/header.php'; ?>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-lg border-0 rounded-4 animate">
        <div class="card-body p-4 bg-white rounded-4">
          <h2 class="text-center mb-4 fw-bold text-pink">Login</h2>
          <form action="handle_login.php" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control rounded-3" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control rounded-3" placeholder="Masukkan email Anda" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-pink rounded-pill fw-semibold">Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>

