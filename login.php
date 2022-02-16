<?php

include_once("./includes/meta.php");

if(isset($_POST["inloggen"])){
  if(isset($_POST["gebruikersnaam"])){
    if(isset($_POST["wachtwoord"])){
      $gebruikersnaam = $_POST["gebruikersnaam"];
      $wachtwoord_plain = $_POST["wachtwoord"];
      
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
  background-color: #588CAA;
  border-color: #588CAA;
}

.btn:hover{
  transition: 0.3s;
  background-color: #588CAA;
  border-color: #588CAA;
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
              <form action="" method="POST">
              <div class="form-floating mb-3">
                <input type="email" class="form-control radiusB" name="gebruikersnaam" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Gebruikersnaam</label>
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
