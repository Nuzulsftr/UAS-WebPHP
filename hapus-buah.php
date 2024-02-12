<?php
include 'config/app.php';
$Id_buah = (int)$_GET['Id_buah'];

if (delete_buah($Id_buah) > 0){
    echo "<script>
            alert('Data buah Berhasil Dihapus');
            document.location.href = 'index.php';
            </script>";
}else {
    echo "<script>
            alert('Data buah Gagal Di Hapus');
            document.location.href = 'index.php';
        </script>";
}