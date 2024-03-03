<?php
include "koneksi.php";
include "boot.php";
$cari=$_POST ['search'];
$tampil = $konek->query("SELECT * FROM list_reservasi where nama='$cari'");
?>

<div class="mb-3 mt-3 ms-3 text-end">
<a href="datareservasi.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></a>
</div>
<div class="mt-2" style="border-color:#FFDAB9">
<table class="table table-bordered">
    <thead class="table-warning">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">No. Hp</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Waktu</th>
        <th scope="col">No. Kursi</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>

    <?php
    while ($s = $tampil->fetch_array()){
        @$no++;
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$s[nama]</td>";
        echo "<td>$s[no_hp]</td>";
        echo "<td>$s[tanggal]</td>";
        echo "<td>$s[waktu]</td>";
        echo "<td>$s[no_kursi]</td>";
        echo "<td>$s[status]</td>";
        ?>
        <td>
            <button  class='btn btn-danger'onclick="return confirm('Anda yakin ingin menghapus data ini?');" href="delete.php?id=<?= $s['no'] ?>"><i class='bi bi-trash3'></i></button>

            <button  class='btn btn-secondary' onclick="document.location.href='ubah.php?id=<?= $s['no']?>'">Ubah</button>
        </td>
        <?php
        echo "</tr>";
    }
?>
</table>
</div>
