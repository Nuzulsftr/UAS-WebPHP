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
$title = 'Detail Mahasiswa';

include 'layout/header.php';


$Id_mahasiswa = (int)$_GET['Id_mahasiswa'];

 $mahasiswa = select("SELECT * FROM Mahasiswa WHERE Id_mahasiswa = $Id_mahasiswa")[0];
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Mahasiswa</h1>
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
                <h1>Tabel Data Detail Mahasiswa</h1>
                <hr>

    <table class="table table-boarder table-stripad mt-3">
        <tr>
            <td>Nim</td>
            <td>: <?= $mahasiswa['nim']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $mahasiswa['nama']; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?= $mahasiswa['jurusan']; ?></td>
        </tr>
        <tr>
            <td>Jenis Klamin</td>
            <td>: <?= $mahasiswa['jk']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $mahasiswa['alamat']; ?></td>
        </tr>
        <tr>
            <td>NO</td>
            <td>: <?= $mahasiswa['nohp']; ?></td>
        </tr>

    </table>
    <a href="mahasiswa.php" class="btn btn-secondary btn-sm">Kembali</a>

    <table class="table table-bordered table-striped mt-3">
</table>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php';