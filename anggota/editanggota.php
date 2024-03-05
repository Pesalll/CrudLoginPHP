<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(255,242,205);
            background: radial-gradient(circle, rgba(255,242,205,1) 0%, rgba(252,149,56,1) 100%);
            display: flex;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            justify-content: center;
            min-height: 100vh;

        }

        h1 {
            text-align: center;
            color: #333;
        }

    
        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 0 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"],
        a.button {
            background-color: #1abc9cf2;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        input[type="submit"]:hover,a.button:hover {
        transition: .51;
        background-color:#1b8785f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Anggota</h1>
        <form name="input" action="simpanedit.php" method="post">
        <?php
        include '../konfigurasi/koneksi.php';
        $id = $_GET['id'];
        $tampil = mysqli_query($koneksi,"SELECT * from anggota where id='$id'");
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
        <div class="form-group">
                Id : <input type="text" name="id" value="<?= $data['id'] ?>"><br>
                Nama : <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
                Kelas : <input type="text" name="kelas" value="<?= $data['kelas'] ?>"><br>
                No Telp : <input type="text" name="notelp" value="<?= $data['no_telp'] ?>"><br>
                <input type="submit" name="submit" value="Simpan">
            </div>
        <?php
        }
        ?>
        </form>
    </div>
</body>
</html>
<?php
    } else {
    ?>
    <script>
        alert("silahkan login terlebih dahulu");
        window.location = "../login.php";
    </script>
    <?php
    }
    ?>