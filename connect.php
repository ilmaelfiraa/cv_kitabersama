<!-- Kode Perintah untuk Koneksi Database -->
<?php

$con = new mysqli('localhost', 'root', '', 'cv_kitabersama');

if (!$con) {
    die(mysqli_error($con));
}