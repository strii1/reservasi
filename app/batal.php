<?php
include "koneksi.php";
$id = $_GET['id'];

mysqli_query($konek, "UPDATE list_reservasi SET status='batal' WHERE no='$id'");

echo "<script>window.location='bukti.php'</script>";

?>
