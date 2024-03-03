<?php
    include "koneksi.php";
    include "boot.php";
    $tampil = $konek->query("SELECT * FROM list_reservasi");
?>
<div class="mt-2 col-5 text-end">
    <form class="d-flex" role="search" action="search.php" method="post" target="kembali">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-outline-dark" type="submit" ><i class="bi bi-search"></i></button>
    </form>
</div>
<div class="mt-3">
<table class="table table-bordered" style="border-color:#FFDAB9">
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
            <button  class='btn btn-outline-danger' onclick="return confirm('Anda yakin ingin menghapus data ini?');" href="delete2.php?id=<?= $s['no'] ?>"><i class='bi bi-trash3'></i></button>

            <button  class='btn btn-outline-success' onclick="document.location.href='ubah.php?id=<?= $s['no']?>'">Ubah</button>
        </td>
        <?php
        echo "</tr>";
    }
?>
</table>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

