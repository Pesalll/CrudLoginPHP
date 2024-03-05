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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        th, td {
            text-align: center;
            border: 1px solid black;
            padding: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th {
            background-color: #1abc9cf2;
            color: #ffffff;
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            background-color: #1abc9cf2;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color:#1b8785f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Anggota Ekskul Voli</h1>
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
        include '../konfigurasi/koneksi.php';
        $tampil = mysqli_query($koneksi,"SELECT * from login");
        while ($data = mysqli_fetch_array($tampil)) {
         echo "<tr>";
         echo "<td>".$data['username']."</td>";   
         echo "<td>".$data['password']."</td>";   
         echo "<td><a href='delete.php ?username=".$data['username']."'>Delete</a></td>";   
         echo "<td><a href='editlogin.php ?username=".$data['username']."'>Edit</a></td>";   
         echo "</tr>";
        }?>
        </table>
        <a href="../index.php">Kembali</a>
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