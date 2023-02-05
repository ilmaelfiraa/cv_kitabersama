<!-- Kode Perintah untuk Menghapus Data -->
<?php
include 'connect.php';
if (isset($_GET['hapusid'])) {
    $id = $_GET['hapusid'];

    $sql = "delete from `produk` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // Jika Hapus Berhasil Kembali ke Halaman Data Produk
        header('location:produk.php');
    } else {
        die(mysqli_error($con));
    }
}