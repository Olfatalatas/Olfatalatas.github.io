<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Profile</title>
  <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience." />
  <link rel="icon" type="image/png" href="../images/icons/anyjobs.ico" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styles/main.css" rel="stylesheet">
</head>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate"><a class="navbar-brand" rel="tooltip">Admin Profile</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="../home.php">Back</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div>
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
            <div class="container">
              <div class="content-center">
                <?php include('../koneksi.php');
                $data = $koneksi->query("SELECT * FROM galeri");
                $d = $data->fetch_assoc();
                ?>
                <div class="cc-profile-image"><a href=../profil_admin/<?php echo $d["foto"]; ?>><img src=../profil_admin/<?php echo $d["foto"]; ?> alt="Image" width="100"></a></div>
                <?php include('../koneksi.php');
                $data = $koneksi->query("SELECT * FROM bioadmin");
                $d = $data->fetch_assoc();
                ?>
                <div class="h2 title"><?php echo $d["nama"]; ?></div>
                <p class="category text-white"><?php echo $d["tingkat"]; ?></p>
              </div>
            </div>
            <div class="section">
              <div class="container">
                <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://web.facebook.com/olfat.alatas.12" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://twitter.com/olfatalatas" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.instagram.com/olfatalatas/" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="about">
        <?php include('../koneksi.php');
        $data = $koneksi->query("SELECT * FROM bioadmin");
        $d = $data->fetch_assoc();
        ?>
        <div class="container">
          <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">About</div>
                  <p><?php echo $d["about"]; ?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">Basic Information</div>
                  <div class="row">
                    <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                    <div class="col-sm-8"><?php echo $d["umur"]; ?></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                    <div class="col-sm-8"><?php echo $d["email"]; ?></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                    <div class="col-sm-8"><?php echo $d["telepon"]; ?></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                    <div class="col-sm-8"><?php echo $d["alamat"]; ?></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                    <div class="col-sm-8"><?php echo $d["bahasa"]; ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include('../koneksi.php');
      if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql1 = "INSERT INTO kontak_admin (nama,subjek,email,pesan) VALUES('$name','$subject','$email','$message')";
        $lastInsertId = mysqli_query($koneksi, $sql1);
        echo "<script>alert('Data sukses disimpan');</script>";
      }
      ?>
      <div class="section" id="contact">
        <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
          <div class="container">
            <div class="cc-contact">
              <div class="row">
                <div class="col-md-9">
                  <div class="card mb-0" data-aos="zoom-in">
                    <div class="h4 text-center title">Contact Me</div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card-body">
                          <form action="" method="POST">
                            <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                  <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                  <input class="form-control" type="text" name="subject" placeholder="Subject" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <input class="form-control" type="email" name="email" placeholder="E-mail" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="form-group">
                                  <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <button class="btn btn-primary" type="submit" name="send">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <?php include('../koneksi.php');
                          $data = $koneksi->query("SELECT * FROM bioadmin");
                          $d = $data->fetch_assoc();
                          ?>
                          <p class="mb-0"><strong>Address </strong></p>
                          <p class="pb-2"><?php echo $d["alamat"]; ?></p>
                          <p class="mb-0"><strong>Phone</strong></p>
                          <p class="pb-2"><?php echo $d["telepon"]; ?></p>
                          <p class="mb-0"><strong>Email</strong></p>
                          <p><?php echo $d["email"]; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container text-center"><a class="cc-facebook btn btn-link" href="https://web.facebook.com/olfat.alatas.12"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="https://twitter.com/olfatalatas"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="https://www.instagram.com/olfatalatas/"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
    <div class="h4 title text-center">Olfat Alatas</div>
    <div class="text-center text-muted">
      <p>&copy; AnyJobs!. All rights reserved.<br>Design - Olfat Alatas</a></p>
    </div>
  </footer>
  <script src="js/core/jquery.3.2.1.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/now-ui-kit.js?v=1.1.0"></script>
  <script src="js/aos.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>