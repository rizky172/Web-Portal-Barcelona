<?php
session_start();
session_destroy();
echo "<script>alert('Anda Berhasil LogOut'); window.location='index.php'</script>";
?>