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
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0){
    echo "<script>
            alert('Data akun Berhasil Dihapus');
            document.location.href = 'akun.php';
            </script>";
}else {
    echo "<script>
            alert('Data akun Gagal Di Hapus');
            document.location.href = 'akun.php';
        </script>";
}