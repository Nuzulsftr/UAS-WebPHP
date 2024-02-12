<?php

$title = "tambah akun";
include 'layout/header.php';
// check apakah tombol; tambah ditekan
if (isset($_POST['tambah'])){
    if (create_akun($_POST) > 0) {
        echo "<script>
                alert('Data akun Berhasil Ditambahkan');
                document.location.href = 'akun.php';
             </script>";
    } else {
        echo "<script>
                alert('Data akun Gagal Ditambahkan');
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
            <h1 class="m-0">Tambah Akun</h1>
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
                <h1>Tabel Data Tambah Akun</h1>
                <hr>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
           <label for="name"> Nama</label>
           <input type="text" name="nama" id="nama" class ="form-control" required>
          </div>

      <div class="mb-3">
           <label for="Username"> Username</label>
           <input type="text" name="Username" id="Username" class ="form-control" required>
      </div>

      <div class="mb-3">
           <label for="email"> Email</label>
           <input type="email" name="email" id="email" class ="form-control" required>
      </div>

      <div class="mb-3">
           <label for="password"> Password</label>
           <input type="password" name="password" id="password" class ="form-control" required minlength="5">
      </div>

      <div class="mb-3">
           <label for="level"> Level</label>
              <select name="level" id="level"class ="form-control" required>
                  <option value="">--pilih level--</option>
                  <option value="1">admin</option>
                  <option value="2">user</option>
              </select>
        
      </div>
      <div class="modal-footer">
      <a href="akun.php" class="btn btn-secondary btn-sm">Kembali</a>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php'?>