<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif; /* Ganti dengan font yang diinginkan */
            margin: 0;
            padding: 0;
            background: url('img/bg.jpeg') center/cover no-repeat; /* Atur gambar background */
        }

        .background{
            background:rgba(8, 8, 7, 0.5);
            height: 100vh;
            margin: auto;
        }
   </style>
</head>

<body>
<div class="background">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" width="58" height="58" class="d-inline-block">  Volley Millenium    </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Anggota
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="anggota/tampilanggota.php">Lihat Data</a></li>
                        <li><a class="dropdown-item" href="anggota/inputanggota.php">Input Data</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
                <li class="nav-item">
                <a class="nav-link" href="login/tampillogin.php">Data Login</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="logout.php" aria-disabled="true">Logout</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</div>

    <script src="bootstrap@5.3.2/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
    <?php
    } else {
    ?>
    <script>
        alert("silahkan login terlebih dahulu");
        window.location = "login.php";
    </script>
    <?php
    }
    ?>