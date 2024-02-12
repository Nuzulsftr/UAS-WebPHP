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
$title = "tambah taa";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_taa($_POST) > 0) {
        echo "<script>
                alert('Data TA Berhasil Ditambahkan');
                document.location.href = 'Taa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data TA Gagal Ditambahkan');
                document.location.href = 'Taa.php';
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
            <h1 class="m-0">Ubah Tugas Akhir</h1>
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
                <h1>Tabel Data Ubah Tugas Akhir</h1>
                <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nota" class="form-label">No.TA</label>
            <input type="text" class="form-control" id="nota"  name="nota" placeholder="nota"
            required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="Text" class="form-control" id="judul" name="judul" placeholder="judul" 
            required>
        </div>
        <div class="mb-3">
            <label for="mahasiswa" class="form-label">Mahasiswa</label>
            <input type="Text" class="form-control" id="mahasiswa" name="mahasiswa" placeholder="mahasiswa"
            required>
        </div>
        <div class="mb-3">
            <label for="pembimbing" class="form-label">Pembimbing</label>
            <input type="Text" class="form-control" id="pembimbing" name="pembimbing" placeholder="pembimbing"
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