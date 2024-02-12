<?php
  session_start();

  include 'config/app.php';

  // check apakah tombol login di tekan
  if(isset($_POST['login'])) {
    //ambil imput username dan password
    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // check username
    $result =  mysqli_query($db, "SELECT * FROM akun WHERE Username ='$Username' ");

    //check pasword
    if(mysqli_num_rows($result) == 1){
      // check password
      $hasil = mysqli_fetch_assoc($result);
      if (password_verify($password, $hasil['password'])){
          //set session
          $_SESSION['login']    = true;
          $_SESSION['Id_akun']  =$hasil['Id_akun'];
          $_SESSION['nama']     =$hasil['nama'];
          $_SESSION['Username'] =$hasil['Username'];
          $_SESSION['email']    =$hasil['email'];

          // jika login benar aragkan ke profil.php
         header("location:Dasboard.php");
         exit;
      }
    }
    //jika tidak ada username/password
    $error = true;
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title> Halaman Admin Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="icon" href="assets/img/bootstrap-logo.svg">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/CSS/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="" method="post">
    <img class="mb-4" src="assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Halaman Login</h1>
     <?php if(isset($error)) : ?>
      <div class="alert alert-danger tect-center">
        <b>Username/Password Salah</b>
      </div>
      <?php endif; ?>

    <div class="form-floating">
      <input type="text" name="Username" class="form-control" id="floatingInput" placeholder="Username..." required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password"name="password" class="form-control" id="floatingPassword" placeholder="Password....."required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
  </form>
</main>


    
  </body>
</html>
