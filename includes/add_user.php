<?php
    include_once 'dbconnect.php';

    $user_login = $_POST['user_login'];
    $user_password = $_POST['user_password'];
    $user_first = $_POST['user_first'];
    $user_last = $_POST['user_last'];
    $user_email = $_POST['user_email'];

    $sql = "INSERT INTO users (user_login, user_password, user_first, user_last, user_email) VALUES ('$user_login', '$user_password', '$user_first', '$user_last', '$user_email');";
    mysqli_query($conn, $sql);

    header("Location: ../workerOfRental.php?signup=success");
?>