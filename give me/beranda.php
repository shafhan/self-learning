<?php
require 'functions.php';
session_start();
if (empty($_SESSION['status'])) {
    echo "
        <script>
            alert('Login terlebih dahulu');
            window.location.href = 'index.php';
        </script>
    ";
}

$data = $call->showAll("SELECT * FROM todo ORDER BY id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
    }
    nav {
        height: 100px;
        background-color: rgba(52, 235, 216, .3);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    nav h2 {
        margin-left: 20px;
    }
    nav input {
        margin-right: 50px;
        padding: 5px 10px;
        background-color:rgba(52, 235, 216, .5);
        border: 1px solid black;
        border-radius: 10px;
        cursor: pointer;
    }
    table {
        width: 80%;
        min-height: 500px;
        text-align: center;
        margin: 50px auto;
    }
    table tr {
        height: 100px;
    }
    table caption {
        margin: 10px;
        font-size: 50px;
    }
    button {
        border: 2px solid royalblue;
        border-radius: 35px;
        margin-left: 650px;
        margin-bottom: 50px;
    }
    button a {
        display: block;
        padding: 15px 20px;
        font-size: 20px;
        color: black;
    }
    button a:hover {
        color: red;
    }
    </style>
</head>
<body>
    <nav>
        <h2>Beranda page</h2>
        <form action="" method="post">
            <input type="submit" name="logout" value="log out" onclick="return confirm('Yakin mau log out');">
        </form>
    </nav>
    <table border="1" cellpadding="10">
        <caption>Todo list</caption>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Waktu</th>
            <th>Gambar</th>
            <th>Aksi</th>
            <th>Check</th>
        </tr>
        <?php $i =1 ?>
        <?php foreach($data as $row): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama_kegiatan'] ?></td>
            <td><?= $row['waktu'] ?></td>
            <td><?= $row['gambar'] ?></td>
            <td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a> OR <a href="hapus.php?id=<?= $row['id'] ?>">Remove</a></td>
            <td><?= $row['cek'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <button><a href="tambah.php">Tambah data</a></button>
</body>
</html>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
}
?>