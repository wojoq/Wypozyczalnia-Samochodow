<?php
    include_once 'dbconnect.php';

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $date_of_production = $_POST['date_of_production'];
    $power = $_POST['power'];
    $VIN = $_POST['VIN'];
    $available = $_POST['available'];

    $sql = "INSERT INTO cars (brand, model, engine, date_of_production, VIN, available) VALUES ('$brand', '$model', '$engine', '$date_of_production', '$VIN', '$available');";
    mysqli_query($conn, $sql);

    header("Location: ../workerOfRental.php?signup=success");
?>