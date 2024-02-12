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

$title = "ubah buah";
include 'layout/header.php';
// check apakah tombo; ubah ditekan
if (isset($_POST['ubah'])){
    if (update_buah($_POST) > 0) {
        echo "<script>
                alert('Data buah Berhasil Diubahkan');
                document.location.href = 'index.php';
             </script>";
    } else {
        echo "<script>
                alert('Data buah Gagal Diubahkan');
                document.location.href = 'index.php';
             </script>";
    }
}
// amg=bi id buah dari url
$Id_buah = (int)$_GET ['Id_buah'];

$buah = select("SELECT * FROM buah WHERE Id_buah = $Id_buah")[0];
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
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
                <h1>Tabel Ubah Buah</h1>
                

    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="Id_buah"value="<?= $buah['Id_buah'] ?>">
        <div class="mb-3">
            <label for="kode" class="form-label">kode</label>
            <input type="text" class="form-control" id="kode"  name="kode" placeholder="kode"
            required value="<?=$buah['kode'] ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama buah</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required value="<?=$buah['nama'] ?>">
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="jenis" class="form-label">jenis</label>
            <select name="jenis" id="jenis" class="form-control" required>
            <?php $jenis= $buah['jenis']; ?>
                <option value="Local" <?= $jenis == 'Local'? 'selected' : null ?>> Local</option>
                <option value="Impord"<?= $jenis == 'Impord'? 'selected' : null ?>> Impord</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga"
            required value="<?=$mahasiswa['harga'] ?>">
        </div>
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