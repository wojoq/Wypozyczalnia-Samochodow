<?php


    include("config.php");
 
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $user_login = $_POST['login'];
        $user_password = $_POST['password'];
        $sql = "SELECT user_id FROM users WHERE user_login = '$user_login' AND user_password = '$user_password'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1 && $count<2) 
        {
            header("location: userOfRental.php");
        }
        else 
        {
            $sql = "SELECT worker_id FROM workers WHERE worker_login = '$user_login' AND worker_password = '$user_password' AND worker_role = 'workerOfRental'";
            $result = mysqli_query($db, $sql);
            $count = mysqli_num_rows($result);
            if($count == 1 && $count<2)
            {
                header("location: workerOfRental.php");
            }
            else
            {
                $sql = "SELECT worker_id FROM workers WHERE worker_login = '$user_login' AND worker_password = '$user_password' AND worker_role = 'administrator'";
                $result = mysqli_query($db, $sql);
                $count = mysqli_num_rows($result);
                if($count == 1 && $count<2)
                {
                    header("location: administrator.php");
                }
                else
                {
                    $error = "Nieprawidłowa nazwa użytkownika, hasła lub typu konta.<br>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wypożyczalnia Samochodowa</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <h1>Wypożyczalnia Samochodowa</h1>

        <form action = "" method = "POST">
            <div class="wrapper">
            <div class="title">
                Zaloguj się
            </div>
            <div class="form">
            <div class="inputfield">
            <label>Login</label>
            <input type="text" class="input"  name = "login" id="login">
            </div>  
            <div class="inputfield">
            <label>Hasło</label>
            <input type="password" class="input"  name = "password" id="password" >
            </div>  
            <div class="inputfield">
            <input type="submit" value="Zaloguj się" class="btn">
            </div>
            </div>
            </div>
        </form>
    </body> 
</html>


