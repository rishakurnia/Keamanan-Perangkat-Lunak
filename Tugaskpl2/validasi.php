<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .eror
        {
            color: #FF0000;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Validasi</h2>
    <form action="berhasil.php" method="post">
        Nama : <input type="text" name="nama" class="form-control">
        <span class="eror">
            <?php
                if (isset($_GET['errnama']))
                {
                    $err = $_GET['errnama'];
                    echo $err;
                }
            ?>
        </span>
        <br/>
        Email : <input type="text" name="Email" class="form-control">
        <span class="eror">
            <?php
                if (isset($_GET['erremail']))
                {
                    $err = $_GET['erremail'];
                    echo $err;
                }
            ?>
        </span>
        <br/>
        Password : <input type="password" name="password" class="form-control">
        <span class="eror">
            <?php
                if (isset($_GET['errpassword']))
                {
                    $err = $_GET['errpassword'];
                    echo $err;
                }
            ?>
        </span>
        <br>
        Nomor Telfon : <input type="number" name="Nomor Telfon" class="form-control">
        <span class="eror">
            <?php
                if (isset($_GET['errnomer']))
                {
                    $err = $_GET['errnomer'];
                    echo $err;
                }
            ?>
        </span>
        <br/>
        Alamat : <textarea name="alamat" class="form-control"></textarea></textarea>
        <span class="eror">
            <?php
                if (isset($_GET['erralamat']))
                {
                    $err = $_GET['erralamat'];
                    echo $err;
                }
            ?>
        </span>

        <input type='submit' value="kirim">
    </form>
</body>
</html>