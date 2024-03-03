<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1"></i></button>
<div id="div1">
    <!-- yang di print -->
    <?php
    include "koneksi.php";
    include "boot.php";
    $tampil = $konek->query("SELECT * FROM list_reservasi");
?>

<div class="mt-2">
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
        echo "</tr>";
    }
?>
</table>
</div>
    <!-- tutup halaman yang di print -->
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