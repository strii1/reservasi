<?php
include "boot.php";
?>

<body background="../img/mejaa.jpeg" style="background-size:cover;">
  <br>
  <br>
  <br>
  <br>
  <div class="container col-3">
    <form class="form form-control bg-dark mt-5" action="" method="post" target="konten">
      <div class="mt-3">
        <p class="fst-italic text-light mb-0">Wellcome</p>
        <p class="fw-bold text-light">Login</p>
      </div>
      <div class="mb-3">
        <input type="Text" class="form-control rounded-left" id="exampleInputUsername" placeholder="Username"
          name="username" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control rounded-left" id="exampleInputPassword1" placeholder="Password" name="password" required>
      </div>
      <div class="d-grid gap-2 mb-3">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>
      <div class="text-center text-light">Belum Punya Akun?
        <a class="link-opacity-100" href="registrasi.php">Daftar</a>
      </div>
    </form>
  </div>
</body>

<?php
include "koneksi.php";
session_start();

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = ("select*from login where username='$username' and password='$password'");
  $login = $konek -> query($query);
  $cek = $login -> num_rows;
  $tampil = $konek -> query ("select * from login where username = '$username'");
  $level = $tampil -> fetch_array();

  if ($cek > 0) {
    
    if ($level['level'] == 'admin') {

      $_SESSION['username'] = $username;
      $_SESSION['id']=$id;
?>

<script>
  document.location='../appadmin/berandaadmin.php';
</script>

<?php

    }else{

      if ($level['level'] == 'user') {

        $_SESSION['username'] = $username;
        $_SESSION['id']=$id;
?>

<script>
  document.location='beranda.php';
</script>

<?php
      }
      }
}else{
  echo "gagal";
}

}
?>