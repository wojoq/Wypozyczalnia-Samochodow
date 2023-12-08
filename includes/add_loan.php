<?php
    include_once 'dbconnect.php';

    $userLoanID = $_POST['userLoanID'];
    $carLoanID = $_POST['carLoanID'];
    $dateLoan = $_POST['dateLoan'];

    $sql = "INSERT INTO loans (loan_date, return_date, id_from_users, id_from_cars) VALUES ('$dateLoan', DATE_ADD('$dateLoan', INTERVAL 14 DAY), $userLoanID, $carLoanID)";
    mysqli_query($conn, $sql);

    header("Location: ../workerOfRental.php?signup=success");
?>