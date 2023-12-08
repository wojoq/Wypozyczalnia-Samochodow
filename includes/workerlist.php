<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Lista pracowników</title>
</head>

<body>
<h1>Pracownicy:</h1>
<?php
    include_once 'dbconnect.php';
    $sql = "SELECT * FROM workers;";
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
            <th> Login </th>
            <th> Hasło </th>
            <th> Imię </th>
            <th> Nazwisko </th>
            <th> E-mail </th>
            <th> Rola </th>
        </tr>";
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['worker_login'] . "</td><td>". $row['worker_password'] . "</td><td>". $row['worker_first'] . "</td><td>". $row['worker_last'] . "</td><td>". $row['worker_email'] . "</td><td>" . $row['worker_role'] . "</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>