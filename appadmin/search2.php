<?php
include "koneksi.php";
include "boot.php";
$cari=$_POST ['cari'];
$tampil = $konek->query("SELECT * FROM kursi where no_kursi='$cari'");
?>

<div class="mb-3 mt-3 ms-3 text-end">
<a href="datakursi.php" class="btn btn-outline-dark" type="back" value="back" name="back"><i class="bi bi-arrow-90deg-left"></i></a>
</div>
<div class="mt-2" style="border-color:#FFDAB9">
<table class="table table-bordered">
    <thead class="table-warning">
        <tr>
        <th scope="col">No</th>
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
        echo "<td>$s[no_kursi]</td>";
        echo "<td>$s[status]</td>";
        ?>
        <td>
            <button class='btn btn-danger' onclick="return confirm('Anda yakin ingin menghapus data ini?');" href="delete.php?id=<?= $s['no'] ?>"><i class='bi bi-trash3'></i></button>

            <button class='btn btn-success' onclick="document.location.href='update.php?id=<?= $s['no'] ?>'" ><i class="bi bi-pencil-square"></i></button>
        </td>
        <?php
        echo "</tr>";
    }
    ?>
</table>
</div>
