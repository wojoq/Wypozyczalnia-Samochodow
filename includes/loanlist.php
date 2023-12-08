<html>
<head>
<link rel="stylesheet" href="../style.css">
<title>Aktualnie wypożyczone</title>
</head>

<body>
<h1>Wypożyczone:</h1><br><br>

<?php
    include_once 'dbconnect.php';
    $sql = "SELECT loans.id, loans.loan_date, loans.return_date, cars.brand, cars.model, users.user_last, users.user_email 
	            FROM loans
		            INNER JOIN users ON loans.id_from_users = users.user_id 
		            INNER JOIN cars ON loans.id_from_cars = cars.id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0) {
        echo "<center><style>

        table, th, td {
            border: 1px solid brown;
            text-align: center;
            vertical-align: center;
          }

          table {
            width: 80%;
            border-collapse: collapse;
          }

          th, td {
            padding: 5px;
            border: 1px solid brown;
          }

          th {
            background-color: brown;
            color: white;
            height: 50px;
          }
          
        tr{
            background-color: antiquewhite;
            hover {background-color: #f5f5f5;}
        }
        </style>";

        echo "<table>
        <tr>
            <th> Data wypożyczenia </th>
            <th> Data zwrotu </th>
            <th> Marka </th>
            <th> Model </th>
            <th> Nazwisko wypożyczającego </th>
            <th> Email wypożyczającego </th>
        </tr>
        <tr>
            <td>";
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['loan_date'] . "</td><td>" .
                 $row['return_date'] . "</td><td>" . 
                 $row['brand'] . "</td><td>" .
                 $row['model'] . "</td><td>" . 
                 $row['user_last'] . "</td><td>" .
                 $row['user_email'] .  "</tr>";
        }
        echo "</table>";
    }
?>
</body>
</html>