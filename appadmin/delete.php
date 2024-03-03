<?php
$id=$_GET['id'];
include "koneksi.php";
$delete=$konek->query("delete from kursi where no='$id'");
?>
<script>document.location = 'datakursi.php';</script>