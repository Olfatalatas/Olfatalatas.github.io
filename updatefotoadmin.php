<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Your Profile</title>
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
<?php
include('koneksi.php');
?>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
            <h1>Profile Admin</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <form class="form" action="" method="POST" enctype="multipart/form-data">
                <!--left col-->


                <div class="form-group">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="form-control" name="foto">
                </div>
                </hr><br>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit" name="submit">Save</button>
                    </div>
                </div>

            </form>
        </div>
        <!--/col-9-->
        <?php
        if (isset($_POST['submit'])) {
            $namafoto = $_FILES['foto']['name'];
            $lokasifoto = $_FILES['foto']['tmp_name'];
            //kl foto dirubah
            if (!empty($lokasifoto)) {
                move_uploaded_file($lokasifoto, "profil_admin/$namafoto");

                $koneksi->query("UPDATE galeri SET foto='$namafoto' WHERE id_galeri='$_GET[id_galeri]'");
            }

            echo "<script>alert('Data telah diubah ');</script>";
            echo "<script>location='tables.php';</script>";
        }
        ?>
    </div>
    <!--/row-->