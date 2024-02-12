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
$title = "ubah Ta";
include 'layout/header.php';
// check apakah tombo; ubah ditekan
if (isset($_POST['ubah'])){
    if (update_taa($_POST) > 0) {
        echo "<script>
                alert('Data Tugas Akhir Berhasil Diubahkan');
                document.location.href = 'Taa.php';
             </script>";
    } else {
        echo "<script>
                alert('Data Tugas Akhir Gagal Diubahkan');
                document.location.href = 'Taa.php';
             </script>";
    }
}
// ambi id mahasiswa dari url
$id_nota = (int)$_GET ['id_nota'];

$Taa = select("SELECT * FROM taa WHERE id_nota = $id_nota")[0];
?>
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nota"value="<?= $Taa['nota'] ?>">
        <div class="mb-3">
            <label for="nota" class="form-label">NO.TA</label>
            <input type="text" class="form-control" id="nota"  name="nota" placeholder="nota"
            required value="<?=$Taa['nota'] ?>">
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="Text" class="form-control" id="judul" name="judul" placeholder="judul" 
            required value="<?=$Taa['judul'] ?>">
        </div>
        <div class="mb-3">
            <label for="mahasiswa" class="form-label">Mahasiswa</label>
            <input type="Text" class="form-control" id="mahasiswa" name="mahasiswa" placeholder="mahasiswa"
            required value="<?=$Taa['mahasiswa'] ?>">
        </div>
        <div class="mb-3">
            <label for="pembimbing" class="form-label">pembimbing</label>
            <input type="text" class="form-control" id="pembimbing" name="pembimbing" placeholder="pembimbing"
            required value="<?=$Taa['pembimbing'] ?>">
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