<?php
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nomer = $_POST['nomer'];
    $alamat = $_POST['alamat'];

    if (empty($nama)) 
    {
        header("location:validasi.php?errnama= * Nama belum di input");
    }
    elseif (empty($email))
    {
        header("location:validasi.php?erremail= * Email belum di input");
    }

    if (empty($password))
    {
        header("location:validasi.php?errpassword= * Password belum di input");
    }

    elseif (empty($nomer))
    {
        header("location:validasi.php?errnomer= * Nomer Telfon belum di input");
    }

    if (empty($alamat))
    {
        header("location:validasi.php?erralamat= * Alamat belum di input");
    }

    else
    {
        echo "Selamat Datang" .$nama. "<br/> di Halaman Beranda";
    }
?>