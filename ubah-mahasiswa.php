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
$title = "ubah Mahasiswa";
include 'layout/header.php';
// check apakah tombo; ubah ditekan
if (isset($_POST['ubah'])){
    if (update_mahasiswa($_POST) > 0) {
        echo "<script>
                alert('Data Mahasiswa Berhasil Diubahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Mahasiswa Gagal Diubahkan');
                document.location.href = 'mahasiswa.php';
             </script>";
    }
}
// amg=bi id mahasiswa dari url
$Id_mahasiswa = (int)$_GET ['Id_mahasiswa'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE Id_mahasiswa = $Id_mahasiswa")[0];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Mahasiswa</h1>
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
                <h1>Tabel Data Ubah Mahasiswa</h1>
                <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="Id_mahasiswa"value="<?= $mahasiswa['Id_mahasiswa'] ?>">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim"  name="nim" placeholder="nim"
            required value="<?=$mahasiswa['nim'] ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required value="<?=$mahasiswa['nama'] ?>">
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="jurusan" class="form-label">jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control" required>
            <?php $jurusan= $mahasiswa['jurusan']; ?>
                <option value="Teknik Informatika" <?= $jurusan == 'Teknik Informatika'? 'selected' : null ?>> Teknik Informatika</option>
                <option value="Sistem Informasi"<?= $jurusan == 'Sistem Informasi'? 'selected' : null ?>> Sistem Informasi</option>
                <option value="Komputerisasi Akutansi"<?= $jurusan == 'Komputerisasi Akutansi'? 'selected' : null ?>> Komputerisasi Akutansi</option>
                <option value="Manajement Informatika"<?= $jurusan == 'Manajement Informatika'? 'selected' : null ?>> Manajement Informatika</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="jk" class="form-label">Jenis Klamin</label>
            <select name="jk" id="jk" class="form-control"required>
                <?php $jk= $mahasiswa['jk']; ?>
                <option value="Laki-Laki"<?= $jk == 'Laki-Laki'? 'selected' : null ?>> Laki-Laki</option>
                <option value="Perempuan"<?= $jk == 'Perempuan'? 'selected' : null ?>> Perempuan</option>
            </select>
        </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="Text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
            required value="<?=$mahasiswa['alamat'] ?>">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No hp</label>
            <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Telpon"
            required value="<?=$mahasiswa['nohp'] ?>">
        </div>
        <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;"> ubah </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php'?>