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
$title = "tambah buah";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_buah($_POST) > 0) {
        echo "<script>
                alert('Data buah Berhasil Ditambahkan');
                document.location.href = 'index.php';
             </script>";
    } else {
        echo "<script>
                alert('Data buah Gagal Ditambahkan');
                document.location.href = 'index.php';
             </script>";
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Buah</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
      <div class="container-mt-5">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1>Tabel Foom Tambah Buah</h1>
                

    <hr>
        <form action="" method="post">
        <div class="mb-3">
            <label for="kode" class="form-label">kode</label>
            <input type="text" class="form-control" id="kode"  name="kode" placeholder="kode"
            required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama buah</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required>
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="jenis" class="form-label">jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
                <option value="">-- JENIS--</option>
                <option value="Local"> Local</option>
                <option value="Import"> Import</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="harga"
            required>
        </div>
        </div>
        <button type= "submit" name="tambah" class ="btn btn-primary" style="float: right;"> Tambah </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php'?>