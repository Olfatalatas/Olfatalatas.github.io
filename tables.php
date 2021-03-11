<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="images/icons/anyjobs.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Anyjobs!
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>Add User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="updateprofiladmin.php">
              <i class="material-icons">account_circle</i>
              <p>Update Admin</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="tables.php">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="edituser.php">
              <i class="material-icons">edit</i>
              <p>Update User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editpesanadmin.php">
              <i class="material-icons">border_color</i>
              <p>Update Order</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="managepesanan.php">
              <i class="material-icons">build</i>
              <p>Manage Order</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="typography.php">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons.php">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Table List</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logoutadmin.php">
                  <i class="material-icons">logout</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profil/profil.php">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabel Pemesanan</h4>
                  <p class="card-category"> Tabel saat user memesan</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                          Destination
                        </th>
                        <th>
                          Service
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Time
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Order
                        </th>
                        <th>
                          Penyelesaian
                        </th>
                        <th>
                          Bukti
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM pemesanan");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                          <tr>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php if ($d['email_pemesan'] == 'Pending') {  ?>
                                <p>Pending</p>
                              <?php   } else { ?>
                                <a>Dipesan Oleh</a> <a href='profilpemesan.php?nama=<?= $d['email_pemesan']; ?>'><?= $d["email_pemesan"] ?></a>
                              <?php   } ?>
                            </td>
                            <td><?php echo $d['telepon']; ?></td>
                            <td><?php echo $d['lokasi']; ?></td>
                            <td><?php echo $d['tujuan']; ?></td>
                            <td><?php echo $d['jasa']; ?></td>
                            <td><?php echo $d['bayar']; ?></td>
                            <td><?php echo $d['tanggal']; ?></td>
                            <td><?php echo $d['waktu']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td><?php if ($d['acc'] == 'Pending') { ?>
                                <p>Pending</p>
                              <?php   } else { ?>
                                <a>Diterima Oleh</a> <a href='profilpenerima.php?nama=<?= $d['acc']; ?>'><?= $d["acc"] ?></a>
                              <?php   } ?>
                            </td>
                            <td><?php echo $d['selesai']; ?></td>
                            <td><a href=bukti/<?php echo $d["bukti"]; ?>><img src="bukti/<?php echo $d['bukti']; ?>" alt="Image" width="100"></a></td>
                            <td>
                              <?php if ($d['status'] !== "Pending") : ?>
                              <?php endif ?>
                              <?php if ($d['acc'] !== "Pending") : ?>
                              <?php endif ?>
                              <?php if ($d['selesai'] !== "Pending") : ?>
                              <?php endif ?>
                              <?php if ($d['bukti'] !== "Pending") : ?>
                              <?php endif ?>
                              <a href="hapuspesanan.php?id=<?php echo $d['id_pemesanan']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a> |
                              <a href="editpesanadmin.php?id=<?php echo $d['id_pemesanan']; ?>"> Update </a> |
                              <a href="managepesanan.php?id=<?php echo $d['id_pemesanan']; ?>"> ManagePay </a>
                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tabel Pembayaran</h4>
                        <p class="card-category"> Tabel user membayar</p>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">
                              <th>
                                Name
                              </th>
                              <th>
                                Service
                              </th>
                              <th>
                                Price
                              </th>
                              <th>
                                Date
                              </th>
                              <th>
                                Time
                              </th>
                              <th>
                                Opsi
                              </th>
                              <th>
                                Actions
                              </th>
                            </thead>
                            <tbody>
                              <?php
                              include 'koneksi.php';
                              $data = mysqli_query($koneksi, "SELECT * FROM pembayaran");
                              while ($d = mysqli_fetch_array($data)) {
                              ?>
                                <tr>
                                  <td><?php echo $d['nama']; ?></td>
                                  <td><?php echo $d['jasa']; ?></td>
                                  <td><?php echo $d['bayar']; ?></td>
                                  <td><?php echo $d['tanggal']; ?></td>
                                  <td><?php echo $d['waktu']; ?></td>
                                  <td><?php echo $d['opsi']; ?></td>
                                  <td>
                                    <a href="hapusbayar.php?id=<?php echo $d['id_pemesanan']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a>
                                  </td>
                                </tr>
                              <?php
                              }
                              ?>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-success">
                              <h4 class="card-title ">Tabel List User</h4>
                              <p class="card-category"> Tabel user | <td><a href="user.php"> Add User </a></td>
                              </p>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                    <th>
                                      Username
                                    </th>
                                    <th>
                                      Email
                                    </th>
                                    <th>
                                      Password
                                    </th>
                                    <th>
                                      Actions
                                    </th>
                                  </thead>
                                  <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $data = mysqli_query($koneksi, "SELECT * FROM login");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                      <tr>
                                        <td><?php echo $d['username']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                        <td><?php echo $d['password']; ?></td>
                                        <td>
                                          <a href="hapususer.php?username=<?php echo $d['username']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a> |
                                          <a href="edituser.php?username=<?php echo $d['username']; ?>"> Update </a>
                                        </td>
                                      </tr>
                                    <?php
                                    }
                                    ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="content">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header card-header-info">
                                    <h4 class="card-title ">Tabel Foto Admin</h4>
                                    <p class="card-category"> Atur foto profil Admin | <td><a href="profilefotoadmin.php"> Add </a></td>
                                    </p>
                                  </div>
                                  <div class="card-body">
                                    <div class="table-responsive">
                                      <table class="table">
                                        <thead class=" text-primary">
                                          <th>
                                            ID
                                          </th>
                                          <th>
                                            Foto
                                          </th>
                                          <th>
                                            Actions
                                          </th>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no = 1;
                                          include 'koneksi.php';
                                          $data = mysqli_query($koneksi, "SELECT * FROM galeri");
                                          while ($d = mysqli_fetch_array($data)) {
                                          ?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><a href=profil_admin/<?php echo $d["foto"]; ?>><img src="profil_admin/<?php echo $d['foto']; ?>" alt="Image" width="100"></a></td>
                                              <td>
                                                <a href="deletefotoadmin.php?id_galeri=<?php echo $d['id_galeri']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a> |
                                                <a href="updatefotoadmin.php?id_galeri=<?php echo $d['id_galeri']; ?>"> Update </a>
                                              </td>
                                            </tr>
                                            <?php $no++ ?>
                                          <?php
                                          }
                                          ?>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="content">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-header card-header-warning">
                                          <h4 class="card-title ">Tabel Kontak</h4>
                                          <p class="card-category"> Tabel Contact-Us</p>
                                        </div>
                                        <div class="card-body">
                                          <div class="table-responsive">
                                            <table class="table">
                                              <thead class=" text-primary">
                                                <th>
                                                  Nama
                                                </th>
                                                <th>
                                                  Email
                                                </th>
                                                <th>
                                                  Subjek
                                                </th>
                                                <th>
                                                  Pesan
                                                </th>
                                                <th>
                                                  Tanggal
                                                </th>
                                                <th>
                                                  Actions
                                                </th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                include 'koneksi.php';
                                                $data = mysqli_query($koneksi, "SELECT * FROM kontak");
                                                while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                  <tr>
                                                    <td><?php echo $d['nama']; ?></td>
                                                    <td><?php echo $d['email']; ?></td>
                                                    <td><?php echo $d['subjek']; ?></td>
                                                    <td><?php echo $d['pesan']; ?></td>
                                                    <td><?php echo $d['tanggal']; ?></td>
                                                    <td><a href="hapuskontak.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a></td>
                                                  </tr>
                                                <?php
                                                }
                                                ?>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="content">
                                      <div class="container-fluid">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="card">
                                              <div class="card-header card-header-danger">
                                                <h4 class="card-title ">Tabel Kontak Admin</h4>
                                                <p class="card-category"> Tabel Contact-Me</p>
                                              </div>
                                              <div class="card-body">
                                                <div class="table-responsive">
                                                  <table class="table">
                                                    <thead class=" text-primary">
                                                      <th>
                                                        Nama
                                                      </th>
                                                      <th>
                                                        Subjek
                                                      </th>
                                                      <th>
                                                        Email
                                                      </th>
                                                      <th>
                                                        Pesan
                                                      </th>
                                                      <th>
                                                        Tanggal
                                                      </th>
                                                      <th>
                                                        Actions
                                                      </th>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                      include 'koneksi.php';
                                                      $data = mysqli_query($koneksi, "SELECT * FROM kontak_admin");
                                                      while ($d = mysqli_fetch_array($data)) {
                                                      ?>
                                                        <tr>
                                                          <td><?php echo $d['nama']; ?></td>
                                                          <td><?php echo $d['subjek']; ?></td>
                                                          <td><?php echo $d['email']; ?></td>
                                                          <td><?php echo $d['pesan']; ?></td>
                                                          <td><?php echo $d['tanggal']; ?></td>
                                                          <td><a href="hapuskontakadmin.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a></td>
                                                        </tr>
                                                      <?php
                                                      }
                                                      ?>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <footer class="footer">
                                            <div class="container-fluid">
                                              <nav class="float-left">
                                                <ul>
                                                  <li>
                                                    <a href="https://www.creative-tim.com">
                                                      Creative Tim
                                                    </a>
                                                  </li>
                                                  <li>
                                                    <a href="https://creative-tim.com/presentation">
                                                      About Us
                                                    </a>
                                                  </li>
                                                  <li>
                                                    <a href="http://blog.creative-tim.com">
                                                      Blog
                                                    </a>
                                                  </li>
                                                  <li>
                                                    <a href="https://www.creative-tim.com/license">
                                                      Licenses
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
                                              <div class="copyright float-right" id="date">
                                                , made with <i class="material-icons">favorite</i> by
                                                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                                              </div>
                                            </div>
                                          </footer>
                                          <script>
                                            const x = new Date().getFullYear();
                                            let date = document.getElementById('date');
                                            date.innerHTML = '&copy; ' + x + date.innerHTML;
                                          </script>
                                        </div>
                                      </div>
                                      <div class="fixed-plugin">
                                        <div class="dropdown show-dropdown">
                                          <a href="#" data-toggle="dropdown">
                                            <i class="fa fa-cog fa-2x"> </i>
                                          </a>
                                          <ul class="dropdown-menu">
                                            <li class="header-title"> Sidebar Filters</li>
                                            <li class="adjustments-line">
                                              <a href="javascript:void(0)" class="switch-trigger active-color">
                                                <div class="badge-colors ml-auto mr-auto">
                                                  <span class="badge filter badge-purple active" data-color="purple"></span>
                                                  <span class="badge filter badge-azure" data-color="azure"></span>
                                                  <span class="badge filter badge-green" data-color="green"></span>
                                                  <span class="badge filter badge-warning" data-color="orange"></span>
                                                  <span class="badge filter badge-danger" data-color="danger"></span>
                                                </div>
                                                <div class="clearfix"></div>
                                              </a>
                                            </li>
                                            <li class="header-title">Images</li>
                                            <li>
                                              <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="assets/img/sidebar-1.jpg" alt="">
                                              </a>
                                            </li>
                                            <li class="active">
                                              <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="assets/img/sidebar-2.jpg" alt="">
                                              </a>
                                            </li>
                                            <li>
                                              <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="assets/img/sidebar-3.jpg" alt="">
                                              </a>
                                            </li>
                                            <li>
                                              <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="assets/img/sidebar-4.jpg" alt="">
                                              </a>
                                            </li>
                                            <li class="button-container">
                                              <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
                                            </li>
                                            <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
                                            <li class="button-container">
                                              <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
                                                View Documentation
                                              </a>
                                            </li>
                                            <li class="button-container github-star">
                                              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                                            </li>
                                            <li class="header-title">Thank you for 95 shares!</li>
                                            <li class="button-container text-center">
                                              <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
                                              <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                                              <br>
                                              <br>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!--   Core JS Files   -->
                                      <script src="assets/js/core/jquery.min.js"></script>
                                      <script src="assets/js/core/popper.min.js"></script>
                                      <script src="assets/js/core/bootstrap-material-design.min.js"></script>
                                      <script src="https://unpkg.com/default-passive-events"></script>
                                      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
                                      <!-- Place this tag in your head or just before your close body tag. -->
                                      <script async defer src="https://buttons.github.io/buttons.js"></script>
                                      <!--  Google Maps Plugin    -->
                                      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                                      <!-- Chartist JS -->
                                      <script src="assets/js/plugins/chartist.min.js"></script>
                                      <!--  Notifications Plugin    -->
                                      <script src="assets/js/plugins/bootstrap-notify.js"></script>
                                      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
                                      <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
                                      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
                                      <script src="assets/demo/demo.js"></script>
                                      <script>
                                        $(document).ready(function() {
                                          $().ready(function() {
                                            $sidebar = $('.sidebar');

                                            $sidebar_img_container = $sidebar.find('.sidebar-background');

                                            $full_page = $('.full-page');

                                            $sidebar_responsive = $('body > .navbar-collapse');

                                            window_width = $(window).width();

                                            $('.fixed-plugin a').click(function(event) {
                                              // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                                              if ($(this).hasClass('switch-trigger')) {
                                                if (event.stopPropagation) {
                                                  event.stopPropagation();
                                                } else if (window.event) {
                                                  window.event.cancelBubble = true;
                                                }
                                              }
                                            });

                                            $('.fixed-plugin .active-color span').click(function() {
                                              $full_page_background = $('.full-page-background');

                                              $(this).siblings().removeClass('active');
                                              $(this).addClass('active');

                                              var new_color = $(this).data('color');

                                              if ($sidebar.length != 0) {
                                                $sidebar.attr('data-color', new_color);
                                              }

                                              if ($full_page.length != 0) {
                                                $full_page.attr('filter-color', new_color);
                                              }

                                              if ($sidebar_responsive.length != 0) {
                                                $sidebar_responsive.attr('data-color', new_color);
                                              }
                                            });

                                            $('.fixed-plugin .background-color .badge').click(function() {
                                              $(this).siblings().removeClass('active');
                                              $(this).addClass('active');

                                              var new_color = $(this).data('background-color');

                                              if ($sidebar.length != 0) {
                                                $sidebar.attr('data-background-color', new_color);
                                              }
                                            });

                                            $('.fixed-plugin .img-holder').click(function() {
                                              $full_page_background = $('.full-page-background');

                                              $(this).parent('li').siblings().removeClass('active');
                                              $(this).parent('li').addClass('active');


                                              var new_image = $(this).find("img").attr('src');

                                              if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                                $sidebar_img_container.fadeOut('fast', function() {
                                                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                                  $sidebar_img_container.fadeIn('fast');
                                                });
                                              }

                                              if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                                                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                                                $full_page_background.fadeOut('fast', function() {
                                                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                                  $full_page_background.fadeIn('fast');
                                                });
                                              }

                                              if ($('.switch-sidebar-image input:checked').length == 0) {
                                                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                                                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                              }

                                              if ($sidebar_responsive.length != 0) {
                                                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                                              }
                                            });

                                            $('.switch-sidebar-image input').change(function() {
                                              $full_page_background = $('.full-page-background');

                                              $input = $(this);

                                              if ($input.is(':checked')) {
                                                if ($sidebar_img_container.length != 0) {
                                                  $sidebar_img_container.fadeIn('fast');
                                                  $sidebar.attr('data-image', '#');
                                                }

                                                if ($full_page_background.length != 0) {
                                                  $full_page_background.fadeIn('fast');
                                                  $full_page.attr('data-image', '#');
                                                }

                                                background_image = true;
                                              } else {
                                                if ($sidebar_img_container.length != 0) {
                                                  $sidebar.removeAttr('data-image');
                                                  $sidebar_img_container.fadeOut('fast');
                                                }

                                                if ($full_page_background.length != 0) {
                                                  $full_page.removeAttr('data-image', '#');
                                                  $full_page_background.fadeOut('fast');
                                                }

                                                background_image = false;
                                              }
                                            });

                                            $('.switch-sidebar-mini input').change(function() {
                                              $body = $('body');

                                              $input = $(this);

                                              if (md.misc.sidebar_mini_active == true) {
                                                $('body').removeClass('sidebar-mini');
                                                md.misc.sidebar_mini_active = false;

                                                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                                              } else {

                                                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                                                setTimeout(function() {
                                                  $('body').addClass('sidebar-mini');

                                                  md.misc.sidebar_mini_active = true;
                                                }, 300);
                                              }

                                              // we simulate the window Resize so the charts will get updated in realtime.
                                              var simulateWindowResize = setInterval(function() {
                                                window.dispatchEvent(new Event('resize'));
                                              }, 180);

                                              // we stop the simulation of Window Resize after the animations are completed
                                              setTimeout(function() {
                                                clearInterval(simulateWindowResize);
                                              }, 1000);

                                            });
                                          });
                                        });
                                      </script>
</body>

</html>