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
$title = "ubah dosen";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['ubah'])){
    if (update_dosen($_POST) > 0) {
        echo "<script>
                alert('Data dosen Berhasil Diubahkan');
                document.location.href = 'dosen.php';
             </script>";
    } else {
        echo "<script>
                alert('Data dosen Gagal Diubahkan');
                document.location.href = 'dosen.php';
             </script>";
    }
}
$id_dosen = (int)$_GET ['id_dosen'];

$dosen = select("SELECT * FROM dosen WHERE id_dosen = $id_dosen")[0];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Tugas Akhir</h1>
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
                <h1>Tabel Data Tambah Tugas Akhir</h1>
                <hr>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_dosen"value="<?= $dosen['id_dosen'] ?>">
        <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" class="form-control" id="nidn"  name="nidn" placeholder="nidn"
            required value="<?=$dosen['nidn'] ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama dosen</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required value="<?=$dosen['nama'] ?>">
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="mk" class="form-label">mk</label>
            <select name="mk" id="mk" class="form-control" required>
                <?php $mk= $dosen['mk']; ?>
                <option value="Mobail Programing"<?= $mk == 'Mobail Programing'? 'selected' : null ?>> Mobail Programing</option>
                <option value="PBO"<?= $mk == 'PBO'? 'selected' : null ?>> PBO</option>
                <option value="DATA BASE"<?= $mk == 'DATA BASE'? 'selected' : null ?>> DATA BASE</option>
                <option value="LINUX"<?= $mk == 'LINUX'? 'selected' : null ?>> LINUX</option>
                <option value="AGAMA"<?= $mk == 'AGAMA'? 'selected' : null ?>> AGAMA</option>
                <option value="WEB SITE"<?= $mk == 'WEB SITE'? 'selected' : null ?>> WEB SITE</option>
                <option value="PANCASILA"<?= $mk == 'PANCASILA'? 'selected' : null ?>> PANCASILA</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="jn" class="form-label">JAM NGAJAR</label>
            <select name="jn" id="jn" class="form-control"required>
                <?php $jn= $dosen['jn']; ?>
                <option value="08.00-11.45"<?= $jn == '08.00-11.45'? 'selected' : null ?>> 08.00-11.45</option>
                <option value="13.00-16.45"<?= $jn == '13.00-16.45'? 'selected' : null ?>> 13.00-16.45</option>
            </select>
        </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="Text" class="form-control" id="email" name="email" placeholder="email"
            required value="<?=$dosen['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="Text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
            required value="<?=$dosen['alamat'] ?>">
        </div>
        <div class="mb-3">
            <label for="tlepon" class="form-label">Telpon</label>
            <input type="number" class="form-control" id="tlepon" name="tlepon" placeholder="Telpon"
            required value="<?=$dosen['tlepon'] ?>">
        </div>
        <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;"> Tambah </button>
    </form>
    </div>
<?php include 'layout/footer.php'?>