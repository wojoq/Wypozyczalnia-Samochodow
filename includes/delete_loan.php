<?php
    include_once 'dbconnect.php';

    $VIN = $_POST['VIN'];
    $user_email = $_POST['user_email'];

    $sql = "SELECT loans.id
	            FROM loans
		            INNER JOIN users ON loans.id_from_users = users.user_id
		            INNER JOIN cars ON loans.id_from_cars = cars.id
			            WHERE users.user_email = '$user_email' AND cars.VIN = $VIN";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck == 0)
    {
        echo "Nie ma wypożyczenia z podaymi danymi!";
    }
    else if ($resultCheck == 1)
    {
        $row = mysqli_fetch_assoc($result);
        $idResult = $row['id'];
        $sql = "DELETE FROM loans WHERE id = $idResult";
        mysqli_query($conn, $sql);
        echo "Wypożyczenie zostało usunięte!";
    }
    else
    {
        echo "Błąd";
    }

    header("Location: ../workerOfRental.php?signup=success");
    ?>