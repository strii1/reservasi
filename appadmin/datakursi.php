<?php
include "koneksi.php";
include "boot.php";
$tampil = $konek->query("SELECT * FROM kursi");
?>

<div class="mt-2 text-end d-flex justify-content-between">
    <form class="d-flex" role="search" action="search2.php" method="post" target="kembali">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i></button>
    </form>
    <a href="tambah.php">
        <button type="button" class="btn btn-outline-secondary">+ Add</button>
    </a>
</div>
<div class="mt-3">
    <table class="table table-bordered" style="border-color:#FFDAB9">
        <thead class="table-warning">
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Kursi</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <?php
        while ($s = $tampil->fetch_array()) {
            @$no++;
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$s[no_kursi]</td>";
            echo "<td>$s[status]</td>";
            ?>
            <td>
                <a class='btn btn-outline-danger' onclick="return confirm('Anda yakin ingin menghapus data ini?');" href="delete.php?id=<?= $s['no'] ?>"><i class='bi bi-trash3'></i></a>

                <button class='btn btn-outline-success' onclick="document.location.href='update.php?id=<?= $s['no'] ?>'" ><i class="bi bi-pencil-square"></i></button>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
    </table>
</div>