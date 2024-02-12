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
$title = "tambah Akun";
include 'layout/header.php';
// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_mahasiswa($_POST) > 0) {
        echo "<script>
                alert('Data Mahasiswa Berhasil Ditambahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Mahasiswa Gagal Ditambahkan');
                document.location.href = 'mahasiswa.php';
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
            <h1 class="m-0">Mahasiswa</h1>
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
                <h1>Tabel Data Mahasiswa</h1>
                <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim"  name="nim" placeholder="nim"
            required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required>
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="jurusan" class="form-label">jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control" required>
                <option value="">-- Pilih Jurusan--</option>
                <option value="Teknik Informatika"> Teknik Informatika</option>
                <option value="Sistem Informasi"> Sistem Informasi</option>
                <option value="Komputerisasi Akutansi"> Komputerisasi Akutansi</option>
                <option value="Manajemen Informatika"> Manajemen Informatika</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="jk" class="form-label">Jenis Klamin</label>
            <select name="jk" id="jenis_klamin" class="form-control"required>
                <option value="">-- Pilih Jenis Klamin--</option>
                <option value="Laki-Laki"> Laki-Laki</option>
                <option value="Perempuan"> Perempuan</option>
            </select>
        </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="Text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
            required>
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No hp</label>
            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Telpon"
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