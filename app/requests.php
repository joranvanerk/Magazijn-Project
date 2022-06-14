<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

if(isset($_GET["afkeuren"])){
  $id_given = cleaning($_GET["afkeuren"]);
  mysqli_query($conn, "UPDATE `requests` SET `status`='0' WHERE `id`='$id_given'");
  echo '<meta http-equiv="refresh" content="0; URL=./requests">';
}

if(isset($_GET["goedkeuren"])){
  $id_given = cleaning($_GET["goedkeuren"]);
  mysqli_query($conn, "UPDATE `requests` SET `status`='1' WHERE `id`='$id_given'");
  echo '<meta http-equiv="refresh" content="0; URL=./requests">';
}

if(isset($_GET["verwijder"])){
  $id_given = cleaning($_GET["verwijder"]);
  mysqli_query($conn, "UPDATE `requests` SET `status`='2' WHERE `id`='$id_given'");
  echo '<meta http-equiv="refresh" content="0; URL=./requests">';
}


// get all requests
$data_1 = "";
$get_requests_query = mysqli_query($conn, "SELECT * FROM `requests` INNER JOIN users ON requests.useremail = users.mail WHERE `status`='0' ORDER BY `username` DESC LIMIT 100");
while($requests_data = mysqli_fetch_assoc($get_requests_query)){
  $data_1 .= '<tr>
        <th scope="row">' . $requests_data["id"] . '</th>
        <td>' . $requests_data["itemname"] . '</td>
        <td>' . $requests_data["username"] . '</td>
        <td>' . $requests_data["description"] . '</td>
        <td>' . $requests_data["quantity"] . '</td>
        <td>' . $requests_data["expirationdate"] . '</td>
        <td><a class="btn btn-success" href="?goedkeuren=' . $requests_data["id"] . '"><i class="fas fa-check"></i></a> <a class="btn btn-danger" href="?verwijder=' . $requests_data["id"] . '"><i class="fas fa-times"></i></a></td>
      </tr>';
}

// get requests that have been aproved
$data_2 = "";
$get_aproved_requests_query = mysqli_query($conn, "SELECT * FROM `requests` INNER JOIN users ON requests.useremail = users.mail WHERE `status`='1' ORDER BY `username` DESC LIMIT 20");
while($requests_aproved_data = mysqli_fetch_assoc($get_aproved_requests_query)){
  $data_2 .= '<tr>
        <th scope="row">' . $requests_aproved_data["id"] . '</th>
        <td>' . $requests_aproved_data["itemname"] . '</td>
        <td>' . $requests_aproved_data["username"] . '</td>
        <td>' . $requests_aproved_data["description"] . '</td>
        <td>' . $requests_aproved_data["quantity"] . '</td>
        <td>' . $requests_aproved_data["statusmessage"] . '</td>
        <td><a class="btn btn-danger" href="?afkeuren=' . $requests_aproved_data["id"] . '"><i class="fas fa-times"></i></a></td>
      </tr>';
}
 ?>

 <!-- card with all requests -->
 <div class="card">
  <div class="card-body">
    <h2 class="text-center">Aanvragen nog te keuren</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Object</th>
      <th scope="col">Aangevraagd door</th>
      <th scope="col">Opmerking</th>
      <th scope="col">Aantal</th>
      <th scope="col">Verloopdatum</th>
      <th scope="col">Acties</th>
    </tr>
  </thead>
  <tbody>
    <?= $data_1 ?>
  </tbody>
</table>
  </div>
</div>
<br>

<!-- card with all aproved requests -->
<div class="card">
 <div class="card-body">
   <h2 class="text-center">Goedgekeurde aanvragen</h2>
   <table class="table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Object</th>
     <th scope="col">Aangevraagd door</th>
     <th scope="col">Opmerking</th>
     <th scope="col">Aantal</th>
     <th scope="col">Status bericht</th>
     <th scope="col">Acties</th>
   </tr>
 </thead>
 <tbody>
   <?= $data_2 ?>
 </tbody>
</table>
 </div>
</div>

 <?php include_once("./includes/footer.php"); ?>
