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
// membatasi halaman sebelum login
$title = ' Daftar Akun';

include 'layout/header.php';

$data_akun = select("SELECT * FROM akun");
// jika tombil tambah ditekan jalankan script berikut
if(isset($_POST['tambah'])){
  if(create_akun($_POST) > 0) {
  echo "<script>
  alert('Data Akun berhasil Ditambahkan');
  document.location.href = 'akun.php';
</script>";
} else {
echo "<script>
  alert('Data Akun gagal Ditambahkan');
  document.location.href = 'akun.php';
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
            <h1 class="m-0">AKUN</h1>
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
                <h1>Tabel Pembuatan Akun</h1>
                

    <hr>
    <a href="tambah-akun.php" class="btn btn-primary mb-1"> <i class="fas fa-plus-circle "></i>Tambah</a>
              </div>
              <!-- /.card-header -->
        
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
          <?php $no = 1; ?>
          <?php foreach ($data_akun as $akun) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $akun['nama'];?></td>
              <td><?= $akun['Username'];?></td>
              <td><?= $akun['email'];?></td>
              <!--jika inging keamanan Pasword-->
              <td>password ter-enskripsi</td>
              <td class="txet-center" width="15%">
                <a href="ubah-akun.php?id_akun=<?= $akun['id_akun']; ?>" class="btn btn-success btn-sm"> 
                <i class='bx bx-edit-alt bx-tada-hover'></i>
                ubah
                </a>
                <a href="hapus-akun.php?id_akun=<?= $akun['id_akun']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data dosen Akan Dihapus?');"> 
                <i class='bx bx-trash bx-tada-hover'></i>
                hapus
                </a>
            </td>

            </tr>
          <?php endforeach; ?>
    </tbody>
</table>
    </div> 
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
  <?php include 'layout/footer.php';?>