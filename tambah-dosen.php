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
$title = "tambah dosen";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_dosen($_POST) > 0) {
        echo "<script>
                alert('Data dosen Berhasil Ditambahkan');
                document.location.href = 'dosen.php';
             </script>";
    } else {
        echo "<script>
                alert('Data dosen Gagal Ditambahkan');
                document.location.href = 'dosen.php';
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
            <h1 class="m-0">Tambah Dosen</h1>
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
                <h1>Tabel Data Tambah Dosen</h1>
                <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" class="form-control" id="nidn"  name="nidn" placeholder="nidn"
            required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama dosen</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required>
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="mk" class="form-label">mk</label>
            <select name="mk" id="mk" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah--</option>
                <option value="Mobail Programing"> Mobail Programing</option>
                <option value="PBO"> PBO</option>
                <option value="DATA BASE"> DATA BASE</option>
                <option value="LINUX"> LINUX</option>
                <option value="AGAMA"> AGAMA</option>
                <option value="WEB SITE"> WEB SITE</option>
                <option value="PANCASILA"> PANCASILA</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="jn" class="form-label">JAM NGAJAR</label>
            <select name="jn" id="jn" class="form-control"required>
                <option value="">-- Pilih JAM NGAJAR--</option>
                <option value="08.00-11.45"> 08.00-11.45</option>
                <option value="13.00-16.45"> 13.00-16.45</option>
            </select>
        </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="Text" class="form-control" id="email" name="email" placeholder="email"
            required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="Text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
            required>
        </div>
        <div class="mb-3">
            <label for="tlepon" class="form-label">Telpon</label>
            <input type="number" class="form-control" id="tlepon" name="tlepon" placeholder="Telpon"
            required>
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