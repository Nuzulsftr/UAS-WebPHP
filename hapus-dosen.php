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
$id_dosen = (int)$_GET['id_dosen'];

if (delete_dosen($id_dosen) > 0){
    echo "<script>
            alert('Data dosen Berhasil Dihapus');
            document.location.href = 'dosen.php';
            </script>";
}else {
    echo "<script>
            alert('Data dosen Gagal Di Hapus');
            document.location.href = 'dosen.php';
        </script>";
}