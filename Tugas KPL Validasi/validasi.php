<?php
    session_start();

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmpass = $_POST['konfirmpass'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];

    if (empty($nama)) 
    {
        header("location:form.php?errnama= * Nama belum di input");
    }
    elseif (empty($username))
    {
        header("location:form.php?errusername= * Username belum di input");
    }

    if (empty($password))
    {
        header("location:form.php?errpassword= * Password belum di input");
    }

    elseif (empty($konfirmpass))
    {
        header("location:form.php?errkonfirmpass= * Konfirmasi Password belum di input");
    }

    if (empty($nomor))
    {
        header("location:form.php?errnomor= * Nomor Telfon belum di input");
    }

    elseif (empty($alamat))
    {
        header("location:form.php?erralamat= * Alamat belum di input");
    }

    else
    {
        echo "Selamat Datang" .$nama. "<br/> di Halaman Beranda";
    }
?>