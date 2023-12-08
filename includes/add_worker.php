<?php
    include_once 'dbconnect.php';

    $worker_login = $_POST['worker_login'];
    $worker_password = $_POST['worker_password'];
    $worker_role = $_POST['worker_role'];
    $worker_first = $_POST['worker_first'];
    $worker_last = $_POST['worker_last'];
    $worker_email = $_POST['worker_email'];

    $sql = "INSERT INTO workers (worker_login, worker_password, worker_role, worker_first, worker_last, worker_email) VALUES ('$worker_login', '$worker_password', '$worker_role', '$worker_first', '$worker_last', '$worker_email');";
    mysqli_query($conn, $sql);

    header("Location: ../administrator.php?signup=success");
?>