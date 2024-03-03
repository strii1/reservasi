<?php
include "boot.php";
?>

<body background="../img/mejaa.jpeg" style="background-size:cover;">
<br>
<br>

<div class="container col-3">

<?php
include "koneksi.php";

if (isset($_POST['daftar'])){

	$username = $_POST['user'];
  $password = $_POST['pass'];

	$lihat = $konek -> query("select * from login where username='$username'");
  $cek = $lihat -> num_rows;

  if ($username==""){

    echo "username harus di isi";

  }elseif($cek > 0) {

    echo '<div class="alert alert-danger" role="alert">maaf user sudah terdaftar</div>';

  }else {

    $input = $konek -> query ("insert into login (username,password,level) values ('$username','$password','user')");

    echo '<div class="alert alert-success" role="alert">Pendaftaran berhasil silahkan login!</div>';

  }
}
?>
<form class="form form-control bg-dark mt-5" action="" method="post" target="konten">
  <div class="mt-3">
    <p class="fst-italic text-light mb-0">Halo</p>
    <p class="fw-bold text-light">Silahkan Daftar</p>
  </div>
  <div class="mb-3">
    <input type="text" class="form-control rounded-left" id="exampleInputName"  placeholder="Username" name="user" required>
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="pass" required>
  </div>
  <div class="d-grid gap-2 mb-3">
    <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
  </div>
  <div class="text-center text-light">Sudah Punya Akun?
    <a class="link-opacity-100" href="login.php">Login</a>
  </div>
</form>

</div>
</body>


