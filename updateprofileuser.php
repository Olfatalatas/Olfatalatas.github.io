<?php include('koneksi.php');
if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $telepon = $_POST['telepon'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $sql1 = "INSERT INTO profil VALUES('$username','$fullname','$telepon','$mobile','$email','$alamat')";
    $lastInsertId = mysqli_query($koneksi, $sql1);
    $cek = mysqli_affected_rows($koneksi);
    if ($cek > 0) {
        echo "<script>alert('Data profil sukses di update');</script>";
    } else {
        echo "<script>alert('Data profil gagal di update');</script>";
    }
}
session_start();
?>
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
<div class="container bootstrap snippet">
    <div class="row">
        <h5><a href="home.php">| Back |</a></h5>
        <div class="col-sm-10">
            <h1>Profile</h1>
        </div>
    </div>
    <div class="row">
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li><a href="profileuser.php">Profile</a></li>
                <li class="active"><a href="updateprofileuser.php">Update Profile</a></li>
            </ul>
            <!--/tab-pane-->
            <div class="tab-pane" id="messages">
                <hr>
                <form class="form" action="" method="POST" id="registrationForm">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>Username</h4>
                            </label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" title="enter your first name if any." value="<?= $_SESSION['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="last_name">
                                <h4>Fullname</h4>
                            </label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" title="enter your last name if any.">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="phone">
                                <h4>Phone</h4>
                            </label>
                            <input type="text" class="form-control" name="telepon" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="mobile">
                                <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="<?= $_SESSION['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Location</h4>
                            </label>
                            <input type="text" class="form-control" name="alamat" id="location" placeholder="somewhere" title="enter a location">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success" type="submit" name="send"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            <button class="btn btn-lg btn-warning" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>

                <hr>

            </div>
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
</div>
<!--/row-->