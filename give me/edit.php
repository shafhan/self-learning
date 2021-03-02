<?php
require 'functions.php';
if(isset($_POST['edit'])) {
    if ($call->edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diedit');
            </script>
        ";
        header('Location: beranda.php');
    } else {
        echo "
            <script>
                alert('Data gagal diedit');
            </script>
        ";
    }
    
}
$id = $_GET['id'];
$data = $call->showAll("SELECT * FROM todo WHERE id = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        nav {
            height: 100px;
            background-color: rgba(52, 235, 216, .3);
        }
        nav h2 {
            text-align: center;
            line-height: 100px;
            font-size: 30px;
        }
        #login-box {
            /* background-color: red; */
            border: 5px solid #34ebd8;
            border-radius: 20px;
            width: 40%;
            height: 550px;
            margin: 50px auto;
        }
        #box-in {
            width: 90%;
            margin: 50px 30px;
            /* background-color: red; */
            /* margin: 150px auto; */
        }
        #box-in li {
            /* font-size: 20px; */
            margin: 30px 0 ;
        }
        #box-in input {
            font-size: 30px;
            height: 80px;
            width: 100%;
            border: 5px solid #34ebd8;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <h2>edit data page</h2>
    </nav>
    <div id="login-box">
        <div id="box-in">
            <form action="" method="post">
                <ul>
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <li>
                        <input type="text" name="nama_kegiatan" id="nama_kegiatan" autocomplete="off" placeholder="Insert nama kegiatan..." value="<?= $data['nama_kegiatan'] ?>" required>
                    </li>
                    <li>
                        <input type="text" name="waktu" id="waktu" autocomplete="off" placeholder="Insert waktu kegiatan..." value="<?= $data['waktu'] ?>" required>
                    </li>
                    <li>
                        <input type="text" name="cek" autocomplete="off" placeholder="Insert waktu kegiatan..." value="<?= $data['cek'] ?>" required>
                    </li>
                    <li>
                        <input type="submit" name="edit" value="edit" style="margin-left: 5px">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>