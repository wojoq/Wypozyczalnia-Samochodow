<html>
<head>
<title>Lista samochodów</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>
<h1>Lista samochodów:</h1><br><br>

<?php
    include_once 'dbconnect.php';
    $sql = "SELECT * FROM cars;";
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
            <th> Marka </th>
            <th> Model </th>
            <th> Silnik </th>
            <th> Rok wydania </th>
            <th> VIN </th>
            <th> Dostępność </th>
            <th> Moc </th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['brand'] . "</td>" . "<td>" . $row['model'] . "</td><td>" . $row['engine'] . "</td><td>" . $row['date_of_production'] . "</td><td>" . $row['VIN'] . "</td><td>" . $row['available'] . "</td><td>" . $row['power'] . "</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>