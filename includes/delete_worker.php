<?php
    include_once 'dbconnect.php';

    $email = $_POST['email'];

    $sql = "DELETE FROM workers WHERE worker_email = '$email';";
    mysqli_query($conn, $sql);

    header("Location: ../administrator.php?signup=success");
    ?>