<?php
include('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Book Your Services</title>
    <link rel="icon" type="image/png" href="../images/icons/anyjobs.ico" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../booking/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../booking/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg"></div>
                        <?php
                        $id = $_GET['id'];
                        $data = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$id'");
                        $d = $data->fetch_assoc();
                        ?>
                        <form method="POST" action="../editpesanan.php">
                            <div class="form-header">
                                <h2>Edit Pesanan</h2>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Enter your Name" value="<?php echo $d['nama']; ?>">
                                <input type="hidden" name="id" value="<?php echo $d['id_pemesanan']; ?>">
                                <span class="form-label">Name</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="phone" placeholder="Enter your Phone number" value="<?php echo $d['telepon']; ?>">
                                <span class="form-label">Phone</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="location" placeholder="Enter your location" value="<?php echo $d['lokasi']; ?>">
                                <span class="form-label">Your Location</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="destination" placeholder="Enter a destination location" value="<?php echo $d['tujuan']; ?>">
                                <span class="form-label">Destination Location</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="service" placeholder="Enter your Services" value="<?php echo $d['jasa']; ?>">
                                <span class="form-label">What kind of Sevices?</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="price" placeholder="Enter the Payment" value="<?php echo $d['bayar']; ?>">
                                <span class="form-label">Payment</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="date" value="<?php echo $d['tanggal']; ?>" required>
                                        <span class="form-label">Pick Date</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="time" name="time" value="<?php echo $d['waktu']; ?>" required>
                                        <span class="form-label">Pick Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../booking/js/jquery.min.js"></script>
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