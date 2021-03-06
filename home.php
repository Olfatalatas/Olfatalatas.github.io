<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome To AnyJobs!</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="images/icons/anyjobs.ico" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.2.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="home.php"><span>AnyJobs!</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Booking</a>
            <ul>
              <li><a href="worker/worker.php">Worker</a></li>
              <li><a href="booking/customer.php">Customer</a></li>
              <li><a href="booking/pembayaran.php">Payment</a></li>
              <li class="drop-down"><a href="#">Other</a>
                <ul>
                  <li><a href="riwayatpesan.php">Booked History</a></li>
                  <li><a href="jobmu.php">Your Task</a></li>
                  <li><a href="profileuser.php">Profile</a></li>
                  <li><a href="logoutuser.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>


        </ul>
      </nav><!-- nav-menu -->
      <li class="ri-user-line"> <a>Online</a>
        <a><?= $_SESSION['username']; ?></a>
      </li>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Ease Your Task With <span>AnyJobs!</span></h1>
            <h2>We are team developer from AnyJobs!</h2>
            <div class="text-center text-lg-left">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">

          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Book Your Services</h3>
            <p>Pesan jasa dengan AnyJobs! dapat memudahkan tugas di rumah dan menghemat waktu anda.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Trustful</a></h4>
              <p class="description">AnyJobs! menjamin keamanan anda dan AnyJobs! tidak akan mencuri dan menyebar luaskan data pribadi anda. Dengan AnyJobs! keamanan anda adalah prioritas kami.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Fast Respond</a></h4>
              <p class="description">Kami menganggap layak bagi mereka, dan mereka menuduh orang-orang yang membenci orang benar, Tapi, dalam kebenaran, dan bujukan masa kini dan kesenangan </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Safe</a></h4>
              <p class="description">Saya akan menjelaskan konsekuensi dari kesenangan besar yang lebih buruk. Aku benci kebenaran Ada yang ditinggalkan jenderal terlalu sedikit, atau untuk dipilih, semua</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
              <h3><a href="booking/customer.php">Order</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-pages-line" style="color: #5578ff;"></i>
              <h3><a href="riwayatpesan.php">History</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a class="btn-get-started scrollto" href="#contact">Contact</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-admin-line" style="color: #e361ff;"></i>
              <h3><a class="btn-get-started scrollto" href="#team">Admin</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="booking/pembayaran.php">AnyPay!</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-user-line" style="color: #ffa76e;"></i>
              <h3><a href="profileuser.php">Profile</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="worker/worker.php">Task</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="home.php">Home</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">69</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">69</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">69</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">69</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Pantas memberikan kesenangan sebagaimana kesenangan tubuh diasumsikan.</h3>
            <p class="font-italic">
              These are the details:
            </p>
            <ul>
              <li><i class="icofont-check"></i> Aliquip memanfaatkan upaya stimulus jika sekolah distrik sebagai masalah.</li>
              <li><i class="icofont-check"></i> Telah dikritik dalam kenikmatan rasa sakit di urna metus cupidatat Duis velitik.</li>
              <li><i class="icofont-check"></i> Tapi menolak kesenangan yang benar, rasa sakit yang layak ditolak.</li>
              <li><i class="icofont-check"></i> Tapi dengan kesengsaraan sekaligus, santai saja tidak tahu bagaimana dia bisa menyenangkan Dia ada saat ini.</li>
            </ul>
            <p>
              Untuk kesenangan menyambut apa pun kecuali kesenangan misalnya. Cepat jika tidak semua konsekuensi dari dia. Tapi di kasar, atau dilemparkan. Kesalahan dilakukan pada salah satu tingkat yang lebih tinggi. Di beberapa layanan mungkin
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Menyediakan kenyamanan</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor dan vitality, sehingga jerih payah dan kesedihan, beberapa hal penting untuk dilakukan eiusmod.
            </p>
            <p>
              Aliquip memanfaatkan upaya stimulus jika sekolah distrik sebagai masalah. Ingin menjadi sakit di cupidatat cillum telah dikritik di pelarian magna Duis et dolore tidak menghasilkan kesenangan yang dihasilkan. Kecuali orang kulit hitam cupidatat tidak terkecuali, menenangkan jiwa, yaitu, mereka adalah kerja keras saya, mereka meninggalkan jenderal yang harus disalahkan bahwa layanan harus
            </p>
            <p>
              Penemu hebat, yang juga mengatakan itu, untuk rasa sakit karena ketidaknyamanan. Pilihan mereka, bagaimanapun, tugas keinginan untuknya, bahwa pengecut yang memalukan. Mengusir, terbebas dari penderitaan, banyak hal untuk dilemparkan padanya. Beberapa orang buta tidak boleh. Seringkali, atau layak untuk dibedakan; ini adalah.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Ada yang ditingkatkan menolak sebagian pikiran tidak ada yang mengikuti menurut kesenangan itu</h3>
            <p>Ingin menyenangkan keinginannya untuk menyenangkan kesalahannya. Dipilih karena berukuran kecil. Mereka sering membenci atau karena kesenangan adalah kesenangan dan kesakitan, kesakitan.</p>
            <ul>
              <li><i class="icofont-check"></i> Aliquip memanfaatkan upaya stimulus jika sekolah distrik sebagai masalah.</li>
              <li><i class="icofont-check"></i> Telah dikritik dalam kenikmatan rasa sakit di urna metus cupidatat Duis velitik.</li>
              <li><i class="icofont-check"></i> Mudah dibuka dan menyenangkan. Ini harus dijalankan.</li>
            </ul>
            <p>
              Mereka yang mencapai waktu. Dan tubuh ini harus hadir untuk menerima kesenangan. Dan ada yang cocok.
            </p>
            <p>
              Mereka yang mencapai waktu. Dan tubuh ini harus hadir untuk menerima kesenangan. Dan ada yang cocok.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Dalam kerangka berpikir bahwa konsekuensi dari kejadian dan kebutuhan menjadi kendala untuk itu dengan A</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor dan vitality, sehingga jerih payah dan kesedihan, beberapa hal penting untuk dilakukan eiusmod.
            </p>
            <p>
              Aliquip memanfaatkan upaya stimulus jika sekolah distrik sebagai masalah. Ingin menjadi sakit di cupidatat cillum telah dikritik di pelarian magna Duis et dolore tidak menghasilkan kesenangan yang dihasilkan. Kecuali orang kulit hitam cupidatat tidak terkecuali, menenangkan jiwa, yaitu, mereka adalah kerja keras saya, mereka meninggalkan jenderal yang harus disalahkan bahwa layanan harus
            </p>
            <ul>
              <li><i class="icofont-check"></i> Arsitek untuk saat ini melelahkan.</li>
              <li><i class="icofont-check"></i>Kesenangannya. Untuk mereka beberapa waktu. Kami juga memiliki konsekuensi. Baik menolak yang pantas dan tidak pernah mau.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Dengann AnyJobs! saya jadi bisa fokus ke pekerjaan saya dan dapat menghemat waktu saya
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              AnyJobs! membuat kehidupan sehari-hari saya lebih mudah, bisa membuat saya fokus pada pekerjaan saya sebagai desaigner baju yang jadwalnya sangat padat
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              AnyJobs! the BEST!!!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              AnyJobs! 4EVER
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              AnyJobs! Dope!!!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/profil(2).jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Olfat Alatas</h4>
                <span>Developer</span>
                <div class="social">
                  <a href="https://twitter.com/olfatalatas"><i class="icofont-twitter"></i></a>
                  <a href="https://web.facebook.com/olfat.alatas.12"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/olfatalatas/"><i class="icofont-instagram"></i></a>
                  <a href="profil/profil.php"><i class="icofont-user"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <?php include('koneksi.php');
    if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $sql1 = "INSERT INTO kontak (nama,email,subjek,pesan) VALUES('$name','$email','$subject','$message')";
      $lastInsertId = mysqli_query($koneksi, $sql1);
      echo "<script>alert('Data pesan sukses');</script>";
    }
    ?>
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>25, Jl. Raya Langsep, Malang, Indonesia</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>olfatharits@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 896 8358 6173</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="" method="POST">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>AnyJobs!</h3>
              <p class="pb-3"><em>Ease your jobs with AnyJobs!</em></p>
              <p>
                25, Jl. Raya Langsep <br>
                Malang , Indonesia<br><br>
                <strong>Phone:</strong> +62 896 8358 6173<br>
                <strong>Email:</strong> olfatharits@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/olfatalatas" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/olfat.alatas.12" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/olfatalatas/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://secure.skype.com/portal/profile" class="skype"><i class="bx bxl-skype"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="btn-get-started scrollto" href="#details">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="btn-get-started scrollto" href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="booking/pembayaran.php">AnyPay!</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="worker/worker.php">Task</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="btn-get-started scrollto" href="#features">Features</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Masukkan email anda</p>
            <?php include('koneksi.php');
            if (isset($_POST['send'])) {
              $email = $_POST['email'];
              $sql1 = "INSERT INTO newsletter (email) VALUES('$email')";
              $lastInsertId = mysqli_query($koneksi, $sql1);
              echo "<script>alert('Data sukses dikirim');</script>";
            }
            ?>
            <form action="" method="POST">
              <input type="email" name="email"><input type="submit" value="Send" name="send">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AnyJobs!</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a>Olfat Harits Alatas</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>