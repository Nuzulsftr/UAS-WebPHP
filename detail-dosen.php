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

$title = 'Detail id_dosen';

include 'layout/header.php';


$id_dosen = (int)$_GET['id_dosen'];

 $dosen = select("SELECT * FROM dosen WHERE id_dosen = $id_dosen")[0];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Dosen</h1>
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
                <h1>Tabel Data Detail Dosen</h1>
                

    <hr>

    <table class="table table-boarder table-stripad mt-3">
        <tr>
            <td>NIDN</td>
            <td>: <?= $dosen['nidn']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>: <?= $dosen['mk']; ?></td>
        </tr>
        <tr>
            <td>Jam Ngajar</td>
            <td>: <?= $dosen['jn']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $dosen['email']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $dosen['alamat']; ?></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td>: <?= $dosen['tlepon']; ?></td>
        </tr>

    </table>
    <a href="dosen.php" class="btn btn-secondary btn-sm">Kembali</a>

    <table class="table table-bordered table-striped mt-3">
</table>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php';