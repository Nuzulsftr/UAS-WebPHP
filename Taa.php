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
$title = 'TUGAS AKHIR';

include 'layout/header.php';



    $data_taa = select("SELECT * FROM Taa ORDER BY id_nota DESC");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TUGAS AKHIR</h1>
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
                <h1>Tabel Data Tugas Akhir</h1>
                

    <hr>
    <a href="tambah-Taa.php" class="btn btn-primary mb-1">Tambah</a>
    <a href="PDF-taa.php" class="btn btn-danger mb-1"> <i class="fas fa-file-pdf"></i>Print PDF</a>
              </div>
              <!-- /.card-header -->
        
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <!-- <th>ID</th> -->
            <th>NO</th>
            <th>No.TA</th>
            <th>Judul</th>
            <th>Mahasiswa</th>
            <th>Pembimbing</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>

        
        <?php foreach ($data_taa as $Taa) : ?>
        <tr>
        <td><?= $no++; ?></td>
            <td><?= $Taa['nota']; ?></td>
            <td><?= $Taa['judul']; ?></td>
            <td><?= $Taa['mahasiswa']; ?></td>
            <td><?= $Taa['pembimbing']; ?></td>

            <td class="txet-center" width="15%">
                <a href="detail-Taa.php?id_nota=<?= $Taa['id_nota']; ?>" class="btn btn-secondary btn-sm"> 
                <i class='bx bx-detail bx-tada-hover'></i>
                Detail
                </a>
                <a href="ubah-Taa.php?id_nota=<?= $Taa['id_nota']; ?>" class="btn btn-success btn-sm"> 
                <i class='bx bx-edit-alt bx-tada-hover'></i>
                ubah
                </a>
                <a href="hapus-Taa.php?id_nota=<?= $Taa['id_nota']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Taa Akan Dihapus?');"> 
                <i class='bx bx-trash bx-tada-hover'></i>
                hapus
                </a>
            </td>
        </tr>
        <?php  endforeach?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </section>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'layout/footer.php';