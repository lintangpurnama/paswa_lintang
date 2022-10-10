<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-4.5.3/css/bootstrap.min.css">
  <title>Halaman Utama</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <a class="navbar-brand" href="#">Welcome.. <?php echo $_SESSION['username'] ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="logout.php">Logout</a>
        </span>
      </div>
    </nav>
    <p>Hello... <?php echo $_SESSION['username'] ?> <br> <b>Selamat Anda Behasil Login</b> </p>
  </div>
</body>
</html>