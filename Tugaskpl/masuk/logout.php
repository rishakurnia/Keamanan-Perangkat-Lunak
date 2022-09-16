<?php
    session_start();
    session_destroy();
    header("location='masuk/login/login.php';");
?>