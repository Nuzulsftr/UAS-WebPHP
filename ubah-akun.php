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
$title = "ubah akun";
include 'layout/header.php';
// check apakah tombo; tambah ditekan
if (isset($_POST['ubah'])){
    if (update_akun($_POST) > 0) {
        echo "<script>
                alert('Data akun Berhasil Diubahkan');
                document.location.href = 'akun.php';
             </script>";
    } else {
        echo "<script>
                alert('Data akun Gagal Diubahkan');
                document.location.href = 'akun.php';
             </script>";
    }
}
$id_akun = (int)$_GET ['id_akun'];

$akun = select("SELECT * FROM akun WHERE id_akun = $id_akun")[0];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Akun</h1>
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
                <h1>Tabel Data Ubah Akun</h1>
                <hr>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_akun"value="<?= $akun['id_akun'] ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama dosen</label>
            <input type="Text" class="form-control" id="nama" name="nama" placeholder="nama" 
            required value="<?=$akun['nama'] ?>">
        </div>


        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="Text" class="form-control" id="Username" name="Username" placeholder="Username"
            required value="<?=$akun['Username'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="Text" class="form-control" id="email" name="email" placeholder="email"
            required value="<?=$akun['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="number" class="form-control" id="password" name="password" placeholder="password"
            required value="<?=$akun['password'] ?>">
        </div>
        <div class="row">
        <div class="mb-3 col-6">
            <label for="level" class="form-label">level</label>
            <select name="level" id="level" class="form-control" required>
                <?php $level= $dosen['level']; ?>
                <option value="admin"<?= $level == 'admin'? 'selected' : null ?>> admin</option>
                <option value="User"<?= $level == 'User'? 'selected' : null ?>> User</option>
            </select>
        </div>
        </div>

        <button type= "submit" name="ubah" class ="btn btn-primary" style="float: right;"> Tambah </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php'?>