<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Booked History</title>
    <link rel="icon" type="image/png" href="images/icons/anyjobs.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

        .table-wrapper {
            width: 3000px;
            margin: 50px auto;
            background: #fff;
            padding: 175px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }

        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }

        .table-title .add-new i {
            margin-right: 4px;
        }

        table.table {
            table-layout: fixed;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table th:last-child {
            width: 100px;
        }

        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }

        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }

        table.table .form-control.error {
            border-color: #f50000;
        }

        table.table td .add {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="location" id="location"></td>' +
                    '<td><input type="text" class="form-control" name="destination" id="destination"></td>' +
                    '<td><input type="text" class="form-control" name="services" id="services"></td>' +
                    '<td><input type="text" class="form-control" name="price" id="price"></td>' +
                    '<td><input type="text" class="form-control" name="date" id="date"></td>' +
                    '<td><input type="text" class="form-control" name="time" id="time"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function() {
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });
    </script>
</head>

<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Riwayat <b>Pemesanan</b></h2>
                        </div>
                        <div class="col-sm-8">
                            <a href="booking/customer.php"> New Order </a> |
                            <a href="home.php"> Back </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Destination</th>
                            <th>Services</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Penyelesaian</th>
                            <th>Bukti Selesai</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $email = $_SESSION['email'];
                        $data = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE email_pemesan='$email'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['telepon']; ?></td>
                                <td><?php echo $d['lokasi']; ?></td>
                                <td><?php echo $d['tujuan']; ?></td>
                                <td><?php echo $d['jasa']; ?></td>
                                <td><?php echo $d['bayar']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td><?php echo $d['status']; ?></td>
                                <td><?php if ($d['acc'] == 'Pending') {  ?>
                                        <p>Pending</p>
                                    <?php   } else { ?>
                                        <a>Diterima Oleh</a><a href='profilpenerima.php?nama=<?= $d['acc']; ?>'><?= $d["acc"] ?></a>
                                    <?php   } ?>
                                </td>
                                <td><?php echo $d['selesai']; ?></td>
                                <td><a href=bukti/<?php echo $d["bukti"]; ?>><img src="bukti/<?php echo $d['bukti']; ?>" alt="Image" width="100"></a></td>
                                <td>
                                    <?php if ($d['status'] !== "Pending") : ?>
                                    <?php endif ?>
                                    <a href="hapuspesan.php?id=<?php echo $d['id_pemesanan']; ?>" onclick="return confirm('Are you sure want to delete this?')"> Delete </a> |
                                    <a href="booking/formeditpesan.php?id=<?php echo $d['id_pemesanan']; ?>"> Edit </a> |
                                    <a href="booking/pembayaran.php?id=<?php echo $d['id_pemesanan']; ?>"> Pay </a> |
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
</body>

</html>