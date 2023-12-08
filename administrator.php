<!DOCTYPE html>
<html>

<head>
    <title>Panel Administratora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Pracownicy</h1>

    <form action="includes/workerlist.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Lista pracowników
        </div>
        <div class="form">
        <div class="inputfield">
        <input type="submit" value="Pokaż listę pracowników" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>



    <form action="includes/add_worker.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Dodaj pracownika
        </div>
        <div class="form">
        <div class="inputfield">
          <label>Login</label>
          <input type="text" class="input"  name = "worker_login" >
        </div>  
        <div class="inputfield">
          <label>Hasło</label>
          <input type="password" class="input"  name = "worker_password"  >
        </div>  
        <div class="inputfield">
          <label>Rodzaj użytkownika</label>
          <input type="text" class="input"  name = "worker_role"  >
        </div>  
        <div class="inputfield">
          <label>Imię</label>
          <input type="text" class="input"  name = "worker_first"  >
        </div>  
        <div class="inputfield">
          <label>Nazwisko</label>
          <input type="text" class="input"  name = "worker_last"  >
        </div>
        <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input"  name = "worker_email"  >
        </div>    
        <div class="inputfield">
        <input type="submit" value="Stwórz użytkownika" class="btn">
        </div>
        </div>
        </div>
</form>


<form action="includes/delete_worker.php" method="POST">
        <div class="wrapper">
        <div class="title">
            Usuń pracownika
        </div>
        <div class="form">
        <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input"  name = "email" >
        </div> 
        <div class="inputfield">
        <input type="submit" value="Usuń pracownika" class="btn">
        </div>
        </div>
        </div>
        </div>
    </form>




</body>

</html>