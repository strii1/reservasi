<?php
include "boot.php";
include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM list_reservasi WHERE no='$id'";

$pilih = mysqli_query($konek, $query);
$data = mysqli_fetch_array($pilih);
?>
<div class="mt-2 text-end justify-content-between">
    <button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 mt-0"></i></button>

    <a href="bukti.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></a>
</div>
<div id="div1">
<!-- yang di print -->
<table class="table" >
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <?php echo $data['nama'] ?>
        </td>
    </tr>
    <tr>
        <td>No Kursi</td>
        <td>:</td>
        <td>
            <?php echo $data['no_kursi'] ?>
        </td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>
            <?php echo $data['tanggal'] ?>
        </td>
    </tr>
    <tr>
        <td>Waktu</td>
        <td>:</td>
        <td>
            <?php echo $data['waktu'] ?>
        </td>
    </tr>
    <tr></tr>
</table>
<!-- akhir yang di print -->
</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>