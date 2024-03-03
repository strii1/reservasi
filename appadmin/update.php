<?php
include "koneksi.php";
$id=$_GET['id'];
$ubah=$konek->query("select*from kursi where no='$id'");
$a=$ubah->fetch_array();
?>

<?php
    include "boot.php"
?>

<div class="mb-3 mt-3 ms-3 text-end">
<a href="datakursi.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i> <b></b></a>
</div>

<div class="container col-6">
<?php
if (!isset($_POST['ubah'])) {

}else {
    $edit = $konek->query("update kursi set no_kursi='$_POST[kursi]' where no='$id'");
    echo '<div class="alert alert-success" role="alert">Nomor kursi berhasil diubah!</div>';
}
?>
<form class="form form-control" style="background-color:#FFEFD5" action="" method="POST">
<p class="text-start"> Edit Data Tempat Duduk</p>
    <div class="mb-3">
        <div class="mb-3 mt-3">
        <input class="form-control" type="text" placeholder="Nomor Kursi" aria-label="default input example" name="kursi" value="<?= $a['no_kursi']?>">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-danger mt-3" name="ubah">Update</button>
        </div>
    </div>
</form>
</div>
