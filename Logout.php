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

// kosongkan semua
$_SESSION =[];

session_unset();
session_destroy();
header("location: login.php")

?>