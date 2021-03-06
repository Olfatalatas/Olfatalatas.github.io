<?php
session_start();
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Details</title>
    <link rel="icon" type="image/png" href="images/icons/anyjobs.ico" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="booking/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="booking/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <h4><a href="worker/worker.php">| Back |</a></h4>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg"></div>
                        <form method="POST" action="">
                            <?php
                            if (isset($_POST['send'])) {
                                $id = $_POST['id'];
                                $email = $_SESSION['email'];
                                $sql1 = "UPDATE pemesanan SET acc='$email' WHERE id_pemesanan='$id'";
                                mysqli_query($koneksi, $sql1);
                                $cek = mysqli_affected_rows($koneksi);
                                if ($cek > 0) {
                                    echo "<script>alert('Data tersimpan');</script>";
                                    echo "<script>location='home.php';</script>";
                                } else {
                                    echo "<script>alert('gagal tersimpan');</script>";
                                }
                            }
                            $username = $_SESSION['username'];
                            $data1 = $koneksi->query("SELECT * FROM profil WHERE username='$username'");
                            $d1 = $data1->fetch_assoc();
                            ?>
                            <div class="form-header">
                                <h2>Penerimaan</h2>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">
                                <input class="form-control" type="text" name="nama" placeholder="Enter your Name" value="<?= $d1['fullname']; ?>" readonly>
                                <span class="form-label">Name</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="jasa" placeholder="What Services?" value="<?= $_GET['jasa']; ?>" readonly>
                                <span class="form-label">What kind of Services?</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="bayar" placeholder="Enter the Payment" value="<?= $_GET['bayar']; ?>" readonly>
                                <span class="form-label">Payment</span>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" name="send">Accept</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="booking/js/jquery.min.js"></script>
    <script>
        $('.form-control').each(function() {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function() {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>