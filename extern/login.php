<?php

include_once("./includes/meta.php");

// check session and redirect is ok
if(isset($_SESSION["login"])){
  header("location: ./dashboard.php");
}

// show the error message for the wrong login details
if(isset($_GET["wronglogin"])){
  $errormessage = '<div class="alert alert-danger" role="alert">
    Ingevoerde gegevens zijn niet juist!
  </div>';
}

// show the error message for when no account is found
if(isset($_GET["wrongaccount"])){
  $errormessage = '<div class="alert alert-danger" role="alert">
    Geen account gevonden!
  </div>';
}

// check for login details and check if ok, if so, create a login session for the user
if(isset($_POST["inloggen"])){
  if(isset($_POST["mail"])){
    if(isset($_POST["wachtwoord"])){
      $mail = cleaning($_POST["mail"]);
      $wachtwoord_plain = cleaning($_POST["wachtwoord"]);
      $select_user_query = mysqli_query($conn, "SELECT * FROM `users` WHERE `mail`='$mail'");
      $select_user_data = mysqli_fetch_assoc($select_user_query);
      $wachtwoord = $select_user_data["password"];
      if(mysqli_num_rows($select_user_query)){
        if(password_verify($wachtwoord_plain, $wachtwoord)){
          $_SESSION["login"] = true;
          $_SESSION["role"] = $select_user_data["permissions"];
          $_SESSION["username"] = $select_user_data["username"];
          header("location: ./dashboard.php");
        }else{
          header("location: ?wronglogin");
        }
      }else{
        header("location: ?wrongaccount");
      }
    }
  }
}

 ?>
<style>
  .bg {
  background-image: url("./includes/login-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  overflow: hidden;
}

.radiusB{
  border-radius: 15px;
}

.btn{
  transition: 0.3s;
  background-color: #5858aa;
  border-color: #5858aa;
}

.btn:hover{
  transition: 0.3s;
  background-color: #5858aa;
  border-color: #5858aa;
  margin-right: 5px;
  margin-left: 5px;
}
</style>
<body>
  <div class="bg" style="height: 100vh;">
  <div class="container-fluid">
    <br><br><br>
    <div class="row">
      <div class="col-sm-0 col-md-4"></div>
      <div class="col-sm-12 col-md-4">
        <div class="text-center"><h1 style="font-weight: 600; color: white;">INLOGGEN</h1></div>
        <div class="card" style="border-radius: 15px; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;">
          <div class="card-body">
            <div class="text-center">
              <img src="./includes/logo.png" style="width: 250px; margin-bottom: 50px;">
              <?php if(isset($errormessage)){ echo $errormessage; } ?>
              <form action="" method="POST">
              <div class="form-floating mb-3">
                <input type="email" class="form-control radiusB" name="mail" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control radiusB" name="wachtwoord" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Wachtwoord</label>
              </div>
              <br>
              <div class="d-grid gap-2" style="margin-bottom: 30px;">
                <button type="submit" name="inloggen" class="btn btn-primary radiusB">INLOGGEN</button>
                </form>
              </div>
              <a href="wachtwoordvergeten.php" style="text-decoration: none; color: black;"><u>Wachtwoord vergeten</u></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-0 col-md-4"></div>
    </div>
  </div>
</div>
</body>
