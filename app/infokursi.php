<?php
include "boot.php";
?>
<p class="text-start mb-0">Keterangan Kode</p>
<p class="text-start mb-0">Contoh: 2A1</p>
<p class="text-start mb-0">2: Jumlah Kursi</p>
<p class="text-start mb-0">A: Baris</p>
<p class="text-start">1: Kolom</p>
<p class="text-start">Waktu operasional Restoran dari jam 09.00-22.00</p>

<div class="me-5 col-5">
  <table class="table table-bordered" style="border-color:#ADD8E6;">
    <div class="row">
      <thead class="table-primary">
        <tr>
          <th scope="col">Tersedia</th>
          <th scope="col">dipesan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php
            include "koneksi.php";
            $kursi=$konek->query("select*from kursi where status like 'tersedia'");
            while ($k=$kursi->fetch_array()){
            ?>

            <option><?=$k['no_kursi']?></option>

            <?php
            }
            ?>
          </td>
          <td>
            <?php
            include "koneksi.php";
            $kursi=$konek->query("select*from kursi where status like 'dipesan'");
            while ($k=$kursi->fetch_array()){
            ?>

            <option><?=$k['no_kursi']?></option>

            <?php
            }
            ?>
          </td>
        </tr>
      </tbody>
    </div>
  </table>
</div>