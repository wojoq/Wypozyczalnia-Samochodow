<?php
$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Panel pracownika</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Użytkownicy</h1>

    <form action="includes/userlist.php" method="POST">
        <div class="wrapper">
        <div class="form">
        <div class="inputfield">
        <input type="submit" value="Pokaż listę użytkowników" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>


<form action="includes/add_user.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Dodaj użytkownika
        </div>
        <div class="form">
        <div class="inputfield">
          <label>Login</label>
          <input type="text" class="input"  name = "user_login" >
        </div>  
        <div class="inputfield">
          <label>Hasło</label>
          <input type="password" class="input"  name = "user_password"  >
        </div>  
        <div class="inputfield">
          <label>Imię</label>
          <input type="text" class="input"  name = "user_first"  >
        </div>  
        <div class="inputfield">
          <label>Nazwisko</label>
          <input type="text" class="input"  name = "user_last"  >
        </div>
        <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input"  name = "user_email"  >
        </div>    
        <div class="inputfield">
        <input type="submit" value="Stwórz użytkownika" class="btn">
        </div>
        </div>
        </div>
</form>

    <form action="includes/delete_user.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Usuń użytkownika
        </div>
        <div class="form">
        <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input"  name = "email" >
        </div> 
        <div class="inputfield">
        <input type="submit" value="Usuń użytkownika" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>


    <h1>Samochody</h1>


    <form action="includes/carlist.php" method="POST">
        <div class="wrapper">
        <div class="form">
        <div class="inputfield">
        <input type="submit" value="Pokaż listę samochodów" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>

    
    <form action="includes/add_car.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Dodaj samochód
        </div>
        <div class="form">
        <div class="inputfield">
          <label>Marka</label>
          <input type="text" class="input"  name = "brand" >
        </div>  
        <div class="inputfield">
          <label>Model</label>
          <input type="text" class="input"  name = "model"  >
        </div>  
        <div class="inputfield">
          <label>Silnik</label>
          <input type="text" class="input"  name = "engine"  >
        </div>  
        <div class="inputfield">
          <label>Data produkcji</label>
          <input type="text" class="input"  name = "date_of_production"  >
        </div>
            <div class="inputfield">
            <label>Moc</label>
            <input type="text" class="input"  name = "power"  >
        </div>
            <div class="inputfield">
          <label>VIN</label>
          <input type="text" class="input"  name = "VIN"  >
        </div>
        <div class="inputfield">
          <label>Dostępność</label>
          <input type="text" class="input"  name = "available"  >
        </div>
        <div class="inputfield">
        <input type="submit" value="Dodaj samochód" class="btn">
        </div>
        </div>
        </div>
</form>

 
<form action="includes/delete_car.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Usuń samochód
        </div>
        <div class="form">
        <div class="inputfield">
          <label>VIN</label>
          <input type="text" class="input"  name = "title" >
        </div> 
        <div class="inputfield">
        <input type="submit" value="Usuń samochód" class="btn">
        </div>
        </div>
        </div>
        </div>
</form>

    <h1>Wypożyczenia</h1>

    <form action="includes/loanlist.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Aktualnie wypożyczone
        </div>
        <div class="form">
        <div class="inputfield">
        <input type="submit" value="Pokaż wypożyczone samochody" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>


    <form action="includes/add_loan.php" method="POST">
    <div class="wrapper">
    <div class="title">
      Wypożycz samochód
    </div>
    <div class="form">
        <div class="inputfield">
          <label>Wybierz użytkownika</label>
          <div class="custom_select">
            <select id="userLoanID" name="userLoanID">
        <option> </option>
        <?php
            include_once 'includes/dbconnect.php';
            $sql = "SELECT user_id, user_login, user_first, user_last, user_email FROM users";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo "<option value=" . $row['user_id'] . ">" . "ID usera: " . 
                                            $row['user_id'] . ", " . 
                                            $row['user_login'] . ", " . 
                                            $row['user_first'] . " " .
                                            $row['user_last'] . ", " .
                                            $row['user_email'] . "</option>";
                }
            }
        ?>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Wybierz samochód</label>
          <div class="custom_select">
          <select id="carLoanID" name="carLoanID">
        <option> </option>
        <?php
            include_once 'includes/dbconnect.php';
            $sql = "SELECT id, brand, model, power, available FROM cars";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    if($row['available'] == FALSE) { continue; }
                    echo "<option value=" . $row['id'] . ">" . "ID samochody: " . 
                                            $row['id'] . ", " . 
                                            $row['brand'] . ", " . 
                                            $row['model'] . ", " .
                                            $row['power'] . "</option>";
                
                }
            }
        ?>
        </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Wybierz datę</label>
          <input type = "date" id="dateLoan" name="dateLoan" value="<?php echo $today; ?>">
        <br>
        </div>
      <div class="inputfield">
        <input type="submit" value="Wypożycz samochód" class="btn">
      </div>
    </div>
</div>
</form>


<form action="includes/delete_loan.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Zwróć samochód
        </div>
        <div class="form">
        <div class="inputfield">
          <label>Model samochodu</label>
          <input type="text" class="input"  name = "power" >
        </div> 
        <div class="inputfield">
          <label>E-mail klienta</label>
          <input type="text" class="input"  name = "user_email" >
        </div> 
        <div class="inputfield">
        <input type="submit" value="Zwróć do biblioteki" class="btn">
        </div>
        </div>
        </div>
        </div>
</form>


</body>
</html>