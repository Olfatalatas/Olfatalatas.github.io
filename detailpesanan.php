<?php
include('koneksi.php');
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$id'");
$d = $data->fetch_assoc();
session_start();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Order Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/anyjobs.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function() {
                readURL(this);
            });
        });
    </script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <h5><a href="worker/worker.php">| Back |</a></h5>
        <div class="col-sm-10">
            <h1>Details</h1>
        </div>
    </div>
    <div class="row">
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="detailpesanan.php">Order</a></li>
                <li><a href="detailpembayaran.php?id=<?php echo $d['id_pemesanan']; ?>">Payment</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Name :</th>
                                <td class="col-sm-8"><?php echo $d["nama"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Phone :</th>
                                <td class="col-sm-8"><?php echo $d["telepon"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Location :</th>
                                <td class="col-sm-8"><?php echo $d["lokasi"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Destination :</th>
                                <td class="col-sm-8"><?php echo $d["tujuan"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Service :</th>
                                <td class="col-sm-8"><?php echo $d["jasa"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Price :</th>
                                <td class="col-sm-8"><?php echo $d["bayar"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Date :</th>
                                <td class="col-sm-8"><?php echo $d["tanggal"]; ?></td>
                            </div>
                        </div>
                    </table>
                    <table class="table">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <th>Time :</th>
                                <td class="col-sm-8"><?php echo $d["waktu"]; ?></td>
                            </div>
                        </div>
                    </table>
                </div>

                <hr>

            </div>
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
</div>
<!--/row-->