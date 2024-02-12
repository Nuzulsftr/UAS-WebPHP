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
$title = 'Daftar DOSEN';

include 'layout/header.php';



    $data_dosen = select("SELECT * FROM dosen ORDER BY id_dosen DESC");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DOSEN</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Jumlah Dosen</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Jumlah Akun</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Mahasiswa TA</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
           <!-- Main content -->
    <section class="content">
      <div class="container-mt-5">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1>Tabel Data Dosen</h1>
                

    <hr>
    <a href="tambah-dosen.php" class="btn btn-primary mb-1">Tambah</a>
    <a href="PDF-dosen.php" class="btn btn-danger mb-1"> <i class="fas fa-file-pdf"></i>Print PDF</a>
              </div>
              <!-- /.card-header -->
        
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>NO</th>
            <th>NIDN</th>
            <th>NAMA</th>
            <th>MATAKULIAH</th>
            <th>JADWAL NGAJAR</th>
            <th>EMAIL</th>
            <th>Alamat</th>
            <th>TELPON</th>
            <th>OPSI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data_dosen as $dosen) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dosen['nidn']; ?></td>
            <td><?= $dosen['nama']; ?></td>
            <td><?= $dosen['mk']; ?></td>
            <td><?= $dosen['jn']; ?></td>
            <td><?= $dosen['email']; ?></td>
            <td><?= $dosen['alamat']; ?></td>
            <td><?= $dosen['tlepon']; ?></td>
            <td class="txet-center" width="15%">
                <a href="detail-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-secondary btn-sm"> 
                <i class='bx bx-detail bx-tada-hover'></i>
                Detail
                </a>
                <a href="ubah-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-success btn-sm"> 
                <i class='bx bx-edit-alt bx-tada-hover'></i>
                ubah
                </a>
                <a href="hapus-dosen.php?id_dosen=<?= $dosen['id_dosen']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data dosen Akan Dihapus?');"> 
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
