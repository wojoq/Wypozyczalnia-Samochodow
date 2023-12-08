<?php
    include_once 'dbconnect.php';

    $VIN = $_POST['VIN'];

    $sql = "DELETE FROM cars WHERE VIN = '$VIN';";
    mysqli_query($conn, $sql);

    header("Location: ../workerOfRental.php?signup=success");
    ?>