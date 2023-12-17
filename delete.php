<?php
include 'database.php';
mysqli_query($db," DELETE FROM buku WHERE id = '$_GET[id]'");
echo"<script>alert('hapus data berhasil'); document.location = 'buku.php';</script>";
?>