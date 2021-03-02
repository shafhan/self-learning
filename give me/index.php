<?php
// require 'functions.php';
// session_start();
// if (isset($_POST['login'])){
//     $call->login($_POST['username'], $_POST['password']);
// }
// if(isset($_SESSION['status'])) {
//     header('Location: beranda.php');
// }
// if(isset($_POST['register'])) {
//     header('Location: register.php');
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login akun</title>
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
        nav input {
            margin-right: 50px;
            padding: 5px 10px;
            background-color:rgba(52, 235, 216, .5);
            border: 1px solid black;
            border-radius: 10px;
            cursor: pointer;
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
            margin: 180px 30px;
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
        <h2>Login page</h2>
        <form action="" method="post">
            <li>
                <input type="submit" name="register" value="Register">
            </li>
        </form>
    </nav>
    <div id="login-box">
        <div id="box-in">
            <form action="" method="post">
                <ul>
                    <li>
                        <input type="text" name="username" id="username" autocomplete="off" placeholder="Insert username...">
                    </li>
                    <li>
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Insert password...">
                    </li>
                    <li>
                        <input type="submit" name="login" value="Log in" style="margin-left: 5px">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>