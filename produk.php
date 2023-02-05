<!-- Koneksi -->
<?php
include 'connect.php';
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Icon Logo -->
    <link rel="icon" href="assets/img/logo_cv.png">

    <title>CV Kita Bersama | Produk</title>

</head>

<body>
    <!-- Tabel Data Produk -->
    <div class="container">
        <div class="mt-5">
            <button class="btn btn-primary"> <a href="tambah_data.php" class="text-white">Tambah Data
                    Produk</a></button>
        </div>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <!-- Menampilkan Data Produk dari Database -->
                <?php
                $sql = "Select * from `produk`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $kategori = $row['kategori'];
                        $berat = $row['berat'];
                        $harga = $row['harga'];
                        $status = $row['status'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $nama . '</td>
                        <td>' . $kategori . '</td>
                        <td>' . $berat . '</td>
                        <td>' . $harga . '</td>
                        <td>' . $status . '</td>
                        <td><a href="edit.php?editid=' . $id . '" class="btn btn-warning text-white">Edit</a>
                            <a href="hapus.php?hapusid=' . $id . '" class="btn btn-danger text-white">Hapus</a>
                        </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

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
</body>

</html>