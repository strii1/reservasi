<?php
include "boot.php";
?>

<div class="mb-3 mt-3 ms-3 text-end">
<a href="datakursi.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></a>
</div>
<div class="container col-6 mt-2">
<?php
include "koneksi.php";

if (isset($_POST['tambahkursi'])){
    $no_kursi = $_POST['kursi'];
    if ($no_kursi == "") {

    } else {
    
        $simpan = $konek->query("insert into kursi (no_kursi,status) values ('$no_kursi','tersedia')");
        echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>';
    }
}


?>
    <form class="form form-control" style="background-color:#FFEFD5" action="" method="POST">
        <p class="text-start">Tambah Data Tempat Duduk</p>
        <div class="mb-3">
            <div class="mt-3" >
                <input class="form-control" type="text" placeholder="Nomor Kursi" aria-label="default input example"
                    name="kursi">
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-danger" name="tambahkursi">Add</button>
        </div>

    </form>
</div>



