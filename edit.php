<!-- Kode Perintah untuk Mengedit Data -->
<?php

include 'connect.php';
$id = $_GET['editid'];

$sql = "select * from `produk`";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$kategori = $row['kategori'];
$berat = $row['berat'];
$harga = $row['harga'];
$status = $row['status'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $sql = "update `produk` set id='$id', nama='$nama', kategori='$kategori', berat='$berat', harga='$harga', status='$status'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:produk.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Icon Logo -->
    <link rel="icon" href="assets/img/logo_cv.png">

    <title>CV Kita Bersama | Edit Data Produk</title>
</head>

<body>
    <!-- Tabel Mengedit Data Produk -->
    <div class="container">
        <h2 class="mt-5">Edit Data Produk</h2>
        <form class="mt-4" method="POST">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option>Daun Kelor</option>
                    <option>Daun Teh</option>
                </select>
            </div>
            <div class="form-group">
                <label>Berat</label>
                <input type="text" class="form-control" value="<?php echo $berat; ?>" name="berat" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" value="<?php echo $harga; ?>" name="harga" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option>Tersedia</option>
                    <option>Habis</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
    </div>


</body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>