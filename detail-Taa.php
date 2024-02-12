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
$title = 'Detail nota';

include 'layout/header.php';


$id_nota = (int)$_GET['id_nota'];

 $taa = select("SELECT * FROM Taa WHERE id_nota = $id_nota")[0];
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Tugas Akhir</h1>
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
                <h1>Tabel Data Detail Tugas Akhir</h1>

                <hr>
    <table class="table table-boarder table-stripad mt-3">
        <tr>
            <td>NO.Ta</td>
            <td>: <?= $taa['nota']; ?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>: <?= $taa['judul']; ?></td>
        </tr>
        <tr>
            <td>Mahasiswa</td>
            <td>: <?= $taa['mahasiswa']; ?></td>
        </tr>
        <tr>
            <td>Pembimbing</td>
            <td>: <?= $taa['pembimbing']; ?></td>
        </tr>
    </table>
    <a href="Taa.php" class="btn btn-secondary btn-sm">Kembali</a>

    <table class="table table-bordered table-striped mt-3">
</table>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php';