<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Magazijn portaal</title>
</head>

<?php

// start session
session_start();

if(isset($_GET["logout"])){
  session_destroy();
  echo '<meta http-equiv="refresh" content="0; URL=./index.php">';
}

// start connection with database
include_once("./includes/db.php");

// add a log to database
function addlog($action, $username){
  global $conn;
  $datetime = date("d-m-Y H:i");
  mysqli_query($conn, "INSERT INTO `log` (`id`, `actie`, `user`, `datetime`) VALUES (NULL, '$action', '$username', '$datetime');");
}

//page permission controller
function pagePermission($role)
{
  //obtain current session role
  $currentRole = $_SESSION["rol"];

  //als meegegeven role niet voldoet aan rol van de gebruiker
  if (!$role == $currentRole){
    //No access
    echo '<meta http-equiv="refresh" content="0; URL=./dashboard.php">';

  } else {
    //access, optional message 
  }

  //0 superuser
  //1 financial manager
  //2 warehouse manager
  //3 student
  //99 non actief

}



 ?>
