<?php
session_start();
$name = $_SESSION['username'];
include "koneksi.php";
include "boot.php";
$tampil = $konek->query("SELECT * FROM list_reservasi WHERE nama='$name'");
?>

<div class="mt-3">
    <table class="table table-bordered" style="border-color:#ADD8E6">
        <thead class="table-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nomor Kursi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
        </tr>
            </tr>
        </thead>

        <?php
        while ($s = $tampil->fetch_array()) {
            @$no++;
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$s[nama]</td>";
            echo "<td>$s[no_kursi]</td>";
            echo "<td>$s[tanggal]</td>";
            echo "<td>$s[waktu]</td>";
            ?>
            <td>
                <button class='btn' onclick="document.location.href='bukti_print.php?id=<?= $s['no'] ?>'"><i class="bi bi-printer-fill"></i></button>
                <?php if($s['status'] == 'dipesan') : ?>
                <button class='btn' onclick="document.location.href='batal.php?id=<?= $s['no'] ?>'">BATAL</button>
                <?php endif ?>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
    </table>
</div>