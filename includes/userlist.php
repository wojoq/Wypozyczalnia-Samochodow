<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title> Lista użytkowników </title>
</head>
<body>

<h1>Lista użytkowników:</h1>

<?php
    include_once 'dbconnect.php';
    $sql = "SELECT * FROM users;";
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
        </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['user_login'] . "</td><td>" . $row['user_password'] . "</td><td>" . $row['user_first'] . "</td><td>" . $row['user_last'] . "</td><td>" . $row['user_email'] . "</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>