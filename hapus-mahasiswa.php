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
$Id_mahasiswa = (int)$_GET['Id_mahasiswa'];

if (delete_mahasiswa($Id_mahasiswa) > 0){
    echo "<script>
            alert('Data Mahasiswa Berhasil Dihapus');
            document.location.href = 'mahasiswa.php';
            </script>";
}else {
    echo "<script>
            alert('Data Mahasiswa Gagal Di Hapus');
            document.location.href = 'mahasiswa.php';
        </script>";
}