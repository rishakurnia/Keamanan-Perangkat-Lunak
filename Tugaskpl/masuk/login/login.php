<?php  
session_start();
if (isset($_POST['login'])) {
    include "../koneksi.php";
    $email_user = $_POST['email_user'];
    // return var_dump($email_user);
    $password    = $_POST['password_user'];
    $cek_user = mysqli_query($conn, "SELECT * FROM `user` WHERE  email_user='$email_user' and password_user='$password'");
    // return var_dump($cek_user);
    $row      = mysqli_num_rows($cek_user);
    if ($row == 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);

    $cek_pass = $fetch_pass['password_user'];
    if ($cek_pass != $password) {
      echo "<script>alert('password salah');</script>";
    } else {
    $_SESSION['log'] = true;
    $_SESSION['id_admin'] = $fetch_pass;
    echo "<script>alert('login Berhasil');document.location.href='../beranda/home.php';</script>";
        }
} else {
    echo "<script>alert('Email salah/belum terdaftar');</script>";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>LOGIN</title>
  </head>
  <body>
    <div class="container">
        <div class="card login-form">             
            <div class="card-body">
              <h1 class="card-title text-center">LOGIN</h1>

              <form method="post">
                <div class="mb-4 mt-4">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input name="email_user" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="password_user" type="password" class="form-control" id="exampleInputPassword1" aria-describedby="password" placeholder="Your Password">
                </div>

                <div class="d-grid mt-4-">
                  <input type="submit"  name="login" class="btn btn-primary btn-login" value="Login">
                </div>

                <div class="mt-3 text-center" style="font-size: 14px;">
                    <label>Not registered yet ? <a href="../signup/signup.php" class="link" style="color: blue;">Create an account</a></label>
                </div>
              </form>
            </div>
          </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>