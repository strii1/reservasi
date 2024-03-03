<?php
include "boot.php";
include "koneksi.php";
session_start();

if (!isset($_SESSION['username'])) {
  header('location:../app/login.php');
  exit();
}else{
  $username = $_SESSION['username'];
}
?>
<div class="container">

  <body>
    <!-- pembuka navbar -->
    <nav class="navbar" style="background-color:#FFEFD5">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="../img/restologo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
          Reservasi
        </a>
        <div class="btn-group">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"><i class="bi bi-person-circle"></i></button>
      <ul class="dropdown-menu dropdown-menu-lg-end">
        <li><button class="dropdown-item" type="button"><?= $username ?></button></li>
      </ul>
    </div>
      </div>
    </nav>
    <!-- penutup navbar -->

    <!-- halaman -->
    <div class="row">
      <div class="col col-3">
        <ul class="list-group">
          <a href="datareservasi.php" target="kembali">
            <li class="list-group-item">Data Reservasi</li>
          </a>
          <a href="datakursi.php" target="kembali">
            <li class="list-group-item">Data Tempat Duduk</li>
          </a>
          <a href="rekap.php" target="kembali">
            <li class="list-group-item">Rekap</li>
          </a>
          <a href="../app/logout.php" onclick="return confirm('Anda yakin ingin keluar?');">
            <li class="list-group-item">logout</li>
          </a>
        </ul>
      </div>
      <div class="col">
        <iframe src="" name="kembali" frameborder="0" width="100%" height="800"></iframe>
      </div>
    </div>
    <!-- penutup halaman -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>