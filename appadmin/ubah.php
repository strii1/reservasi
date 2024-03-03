<?php
include "koneksi.php";
$id=$_GET['id'];
$ubah=$konek->query("select*from list_reservasi where no='$id'");
$a=$ubah->fetch_array();

$nokursi = $a['no_kursi'];
?>

<?php
    include "boot.php"
?>

<div class="mb-3 mt-3 ms-3 text-end">
<a href="datareservasi.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></a>
</div>

<div class="container col-6">
<?php
if (!isset($_POST['ganti'])) {
    
}else {
$edit = $konek->query("update list_reservasi set status='$_POST[status]' where no='$id'");
    if ($edit){
        $konek->query("update kursi set status='tersedia' where no_kursi='$nokursi'");
    }
    echo '<div class="alert alert-success" role="alert">Status berhasil diubah!</div>';
}
?>
<form class="form form-control" style="background-color:#FFEFD5" action="" method="POST">
    <p class="text-start">List Status Reservasi</p>
    <div class="mb-3">
        <div class="input-group" >
            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="status" value="<?= $a['status']?>">
                <option value="1">dipesan</option>
                <option value="2">selesai</option>
                <option value="3">batal</option>
            </select>
</div>    
        <div class="text-end text-end">
            <button type="submit" class="btn btn-danger mt-3" name="ganti">Update</button>
        </div>
    </div>
</form>
</div>
