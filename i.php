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

$title = 'Daftar buah';

include 'layout/header.php';



    $data_buah = select("SELECT * FROM buah ORDER BY id_buah DESC");
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1 class="m-0">Buah</h1>
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
                   <h1>Tabel Pembuatan Buah</h1>
                   
   
       <hr>
       <a href="tambah-buah.php" class="btn btn-primary mb-1"> <i class="fas fa-plus-circle "></i>Tambah</a>
                 </div>
                 <!-- /.card-header -->
           
                 <div class="card-body">
           <table id="example2" class="table table-bordered table-hover">
          <thead>
           <tr>
           <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS </th>
            <th>HARGA</th>
            <th>TANGGAL</th>
            <th>Opsi</th>
           </tr>
       </thead>
       <tbody>
       <?php $no = 1; ?>

       <?php foreach ($data_buah as $buah) : ?>
          <tr>
          <td><?= $no++; ?></td>
            <td><?= $buah['kode']; ?></td>
            <td><?= $buah['nama']; ?></td>
            <td><?= $buah['jenis']; ?></td>
            <td>Rp<?= number_format($buah['harga'],0,',',','); ?></td>
            <td> <?= date('d-n-Y | H:i:s', strtotime($buah['tanggal'])); ?></td>
            <td class="txet-center" width="15%">
            <a href="detail-buah.php?Id_buah=<?= $buah['Id_buah']; ?>" class="btn btn-secondary btn-sm"
                i class='bx bx-detail bx-tada-hover'></i>
                Detail</a>
                <a href="ubah-buah.php?Id_buah=<?= $buah['Id_buah']; ?>" class="btn btn-success btn-sm"
                i class='bx bx-edit-alt bx-tada-hover'></i>
                ubah
                </a>
                <a href="hapus-buah.php?Id_buah=<?= $buah['Id_buah']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda Yakin ingin menghapus data ini?');"
                i class='bx bx-trash bx-tada-hover'></i>
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
