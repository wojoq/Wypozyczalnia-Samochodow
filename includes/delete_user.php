<?php
    include_once 'dbconnect.php';

    $email = $_POST['email'];

    $sql = "DELETE FROM users WHERE user_email = '$email';";
    mysqli_query($conn, $sql);

    header("Location: ../workerOfRental.php?signup=success");

    ?>