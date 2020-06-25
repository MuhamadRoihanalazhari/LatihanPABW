<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Home</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="tugas.php">Tugas</a></li>
           <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="kabupaten.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Data Master 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="list-kabupaten.php"> Kabupaten</a>
                                        <a class="dropdown-item" href="list-kecamatan.php">Kecamatan</a>
                                        <a class="dropdown-item" href="list-desa.php">Desa/Kelurahan</a>
                                    </div>
                                </li>
          <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="pencatatan-sipil.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Pencatatan sipil
                                            </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="domisili.php">Pengurusan Domisili</a>
                                        <a class="dropdown-item" href="pengurusan-ktp.php">Pengurusan KTP</a>
                                        <a class="dropdown-item" href="surat-jalan.php">Pengurusan Surat Jalan</a>
                                    </div>
                                </li>
          <li><a href="#faq">Laporan</a></li>
          <li><a href="Login/keluar.php">Keluar</a></li>

          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
          
          
          <br><br><br><h2> Desa/Kelurahan yang sudah terdaftar</h2>
                            <nav>
                                <br><a class="btn_2" href="form-input-desa.php">[+] Tambah Baru</a>
                            </nav>

                            <br>

                            <table style="color:black;" align="center" border="1">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>NAMA DESA/KELURAHAN</th>
                                        <th>JUMLAH PENDUDUK</th>
                                        <th>KECAMATAN</th>
                                        <th>TINDAKAN</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php include("config.php");
        $sql = "SELECT * FROM desa, kecamatan WHERE desa.id_kecamatan =
 kecamatan.id_kecamatan ";;
        $query = mysqli_query($db, $sql);

        while($kabupaten = mysqli_fetch_array($query)){
            echo "<tr>";

             
            echo "<td>".$kabupaten['id_desa']."</td>";
            echo "<td>".$kabupaten['nama_desa']."</td>";
            echo "<td>".$kabupaten['jumlah_penduduk']."</td>";
            echo "<td>".$kabupaten['nama_kecamatan']."</td>";
            
            echo "<td>";
            echo "<a href='form-edit-desa.php?id_desa=".$kabupaten['id_desa']."'title='Edit'><img src='iedit.png' width='20' height='20' </a>";
            echo "<a href='hapus-desa.php?id_desa=".$kabupaten['id_desa']."'onclick=\"return confirm('Apakah anda yakin menghapus data ?')\"title='Hapus'><img src='ihapus.png' width='20' height='20'  </a>";
            
           

            echo "</tr>";
        }
        ?>

                                </tbody>
                            </table>

                            <p>Total :
                                <?php echo mysqli_num_rows($query) ?><br><br><br>
                            </p>
                           

          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  

  

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Muhamad Roihan alAzhari</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>