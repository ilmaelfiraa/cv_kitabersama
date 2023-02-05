<!-- Mengetahui Lama Eksekusi (Execution Time) Sebuah Script -->

<!-- <?php

        $awal = microtime(true);

        $bil = 2;
        $hasil = 1;
        for ($i = 1; $i <= 10000000; $i++) {
            $hasil .= $bil;
        }

        $akhir = microtime(true);
        $lama = $akhir - $awal;
        echo
        "<p>Lama eksekusi script adalah: " . $lama . " detik</p>";

        ?> -->



<!-- Contoh Sederhana Penggunaan Array -->
<?php

$judul = [
    'judul_1' => 'Perkebunan Daun Kelor',
    'judul_2' => 'Perkebunan Daun Teh',
];

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

    <title>CV Kita Bersama</title>

</head>

<body>
    <!-- Navbar Open -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo_cv.png" width="30" height="35" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="produk.php">Produk</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari sesuatu..." aria-label="Search">
                    <button class="btn btn-search my-2 my-sm-0" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Open -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/carousel_1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo "{$judul['judul_1']}"; ?></h5>
                    <p>Kami menghasilkan daun kelor alami yang kaya akan manfaat.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/carousel_2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo "{$judul['judul_2']}"; ?></h5>
                    <p>Hasilkan daun teh terbaik hanya untuk anda.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Tentang Kami Section Open -->
    <section class="tentang_kami">
        <div class="container">
            <h2>Tentang Kami</h2>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <img src="assets/img/tentangkami_img.jpg" alt="img">
                </div>
                <div class="col-md-6">
                    <p>CV. Kita Bersama yang berfokus pada pengelolaan daun kelor dan daun teh yang beroperasi sejak
                        september 1997. Beralamat di Kelurahan Tipo, Kecamatan Ulujadi, Kota Palu, Sulawesi Tengah. CV.
                        Kita
                        Bersama merupakan perusahaan pertama dan terbesar di Asia Tenggara yang mengembangkan daun kelor
                        dan daun teh
                        untuk
                        dijadikan berbagai ragam produk.
                    </p>
                    <button class="btn btn-primary mt-3">Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Kami Section End -->

    <!-- Footer Section Open -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer_col col-md-5">
                    <h3 class="mb-5">Informasi</h3>
                    <h5>Info@cvkitabersama</h5>
                    <h5>Kelurahan Tipo, Kec. Ulujadi, Sulawesi Tengah</h5>
                </div>
                <div class="footer_col col-md-4">
                    <h3 class="mb-5">Social Media</h3>
                    <div class="footer_icon">
                        <a href="https://web.facebook.com/NurulHidayahBengkalis">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="https://web.facebook.com/NurulHidayahBengkalis">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://web.facebook.com/NurulHidayahBengkalis">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://web.facebook.com/NurulHidayahBengkalis">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
                <div class="footer_col col-md-3">
                    <h3 class="mb-5">Ketentuan Penggunaan</h3>
                    <h5>Lisensi</h5>
                    <h5>Privasi dan Kondisi</h5>
                </div>
            </div>
            <div class="row">
                <div class="copyright col-md-12 text-center">
                    <h5>Copyright © 2022. CV. Kita Bersama</h5>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->





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