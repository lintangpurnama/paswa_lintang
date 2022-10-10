<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-4.5.3/css/bootstrap.min.css">
    <title>Halaman Login</title>
</head>
<body>
    <form action="proses_login.php" method="POST">
        <div class="container" style="height: 500px">
            <div class="row h-100">
                <div class="col-sm-12 my-auto">
                    <div class="card w-50 mx-auto">
                        <div class="card-header bg-info">
                            <h4 class="text-white"> Halaman Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">Username </div>
                                    <input type="text" name="username" class="form-control col-md-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">Password </div>
                                    <input type="password" name="password" class="form-control col-md-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"> </div>
                                    <input type="submit" class="btn btn-info">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"> </div>
                                    <?php
                                    if (isset($_SESSION['login_gagal'])) {
                                        echo '<div class="alert alert-warning" role="alert">';
                                        echo $_SESSION['login_gagal'];
                                        echo '</div> ';
                                        session_unset();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>