<?php
require 'functions.php';
// session_start();
if (isset($_POST['register'])){
    if ($_POST['password'] == $_POST['password2']) {
        if ($call->register($_POST['username'], $_POST['password']) > 0) {
            echo "
                <script>
                    alert('Selamat anda telah telah terdaftar');
                    window.location.href = 'index.php';
                </script>
            ";
        }
    } else {
        echo "
                <script>
                    alert('Password dengan konfirmasi password harus sama');
                </script>
            ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register akun</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        nav {
            height: 100px;
            background-color: rgba(52, 235, 216, .3);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav h2 {
            margin-left: 25px;
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
        <h2>Register page</h2>
    </nav>
    <div id="login-box">
        <div id="box-in">
            <form action="" method="post">
                <ul>
                    <li>
                        <input type="text" name="username" autocomplete="off" placeholder="Insert username...">
                    </li>
                    <li>
                        <input type="password" name="password" autocomplete="off" placeholder="Insert password...">
                    </li>
                    <li>
                        <input type="password" name="password2" autocomplete="off" placeholder="confirm your password...">
                    </li>
                    <li>
                        <input type="submit" name="register" value="Register" style="margin-left: 5px">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>