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
$title = 'Daftar Mahasiswa';

include 'layout/header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
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
                <h1></h1>
                <hr>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan menu Nuzul Safitra</title>
</head>

<body>
    <hr />

    <header style="text-align: center;">
        <img src="image/foto-profil.JPG" width="270" height="300" style="border-radius: 50%;" />
        <h1>Nuzul Safitra</h1>
        <p>(Web Developer)</p>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>Overview</h2>
        <p>
            Hi, Saya adalah Mahasiswa sttikom Insan Unggul jurusan Sistem Informasi Semester 5
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Pengalaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>HTML (Pemula)</li>
                            <li>CSS (Pemula)</li>
                            <li>Javascript (Insyaallah Bisa)</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Freelancer di Internet</li>
                            <li>Kreator UI/UX</li>
                            <li>UI/Ux Community</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2023 Nuzul Safitra.</p>
    </footer>
</body>

</html>
</div>
    </div>
    </div>
    </div>
    </section>
<?php include 'layout/footer.php';