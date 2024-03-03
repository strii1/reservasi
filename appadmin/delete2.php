<?php
$id=$_GET['id'];
include "koneksi.php";
$delete =$konek->query("delete from list_reservasi where no='$id'");
?>
<script>document.location = 'datareservasi.php';</script>