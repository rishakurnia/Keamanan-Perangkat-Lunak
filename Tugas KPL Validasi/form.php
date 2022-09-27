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
    <title>Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Form Pendaftaran</h3>
            </div>
            <form action="validasi.php" method="post">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form>
                                <div class="form-grup">
                                    <label>Nama</label>
                                    <input type="text" name="fullname" class="form-control">
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['errnama']))
                                            {
                                                $err = $_GET['errnama'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['errusername']))
                                            {
                                                $err = $_GET['errusername'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['errpassword']))
                                            {
                                                $err = $_GET['errpassword'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" name="konfirmpass" class="form-control">
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['errkonfirmpass']))
                                            {
                                                $err = $_GET['errkonfirmpass'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                    <label>Nomor Telfon</label>
                                    <input type="number" name="nomor" class="form-control">
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['errnomor']))
                                            {
                                                $err = $_GET['errnomor'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                    <span class="eror">
                                        <?php
                                            if (isset($_GET['erralamat']))
                                            {
                                                $err = $_GET['erralamat'];
                                                echo $err;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="form-grup">
                                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                            
            </form>    
        </div>

    </section>
</body>
</html>