<?php
session_start();
    include "boot.php";
?>
<div class="container col-6 mt-3">
<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $no_kursi = $_POST['no_kursi'];

    if ($nama==""){

    } else {

    $simpan =$konek->query("insert into list_reservasi (nama,no_hp,tanggal,waktu,no_kursi,status) values ('$nama','$no_hp','$tanggal','$waktu','$no_kursi','dipesan')");

    $status=$konek->query("update kursi set status='dipesan' where no_kursi='$no_kursi'");

    echo '<div class="alert alert-success" role="alert">Reservasi berhasil silahkan cek bukti reservasi!</div>';
    } 
}
?>


<form class="form form-control" style="background-color:#ADD8E6" action="" method="POST">
   <p class="text-center fs-2 fw-semibold mb-0">Formulir Reservasi</p> 
    <div class="mb-3">
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="floatingInput" name="nama" value="<?php echo $_SESSION['username'] ?>" readonly>
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floating" name="no_hp">
            <label for="floatingNumber">Nomor Hp</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floating" name="tanggal">
            <label for="floatingDate">Tanggal</label>
        </div>
        <div class="form-floating mb-3">
            <input type="time" class="form-control" id="floating" name="waktu">
            <label for="floatingTime">Waktu</label>
        </div>
        <div class="form-floating mb-3">   
        <select name="no_kursi" id="" class="form-control" >
        
        <?php
         include "koneksi.php";
        $kursi=$konek->query("select*from kursi where status like 'tersedia'");
        while ($k=$kursi->fetch_array()){
        ?>

        <option><?=$k['no_kursi']?></option>

        <?php
        }
        ?>
         </select>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary mt-3" name="simpan">Reservasi</button>
        </div>
    </div>
</form>
</div>


