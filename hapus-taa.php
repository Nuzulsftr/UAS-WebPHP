<?php
session_start();
// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('login dulu sayang');
            document.location.href = 'login.php' ;
            </script>"; 
    exit;
        
}
include 'config/app.php';
$id_nota = (int)$_GET['id_nota'];

if (delete_taa($id_nota) > 0){
    echo "<script>
            alert('Data Tugas Akhir Berhasil Dihapus');
            document.location.href = 'Taa.php';
            </script>";
}else {
    echo "<script>
            alert('Data Tugas Akhir Gagal Di Hapus');
            document.location.href = 'Taa.php';
        </script>";
}