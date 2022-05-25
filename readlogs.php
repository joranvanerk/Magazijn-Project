<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

//to-do : delete logs

//checks if the current user is a superuser
$rol = $_SESSION["role"];
if(!$rol == 0){
    echo '<meta http-equiv="refresh" content="0; URL=./dashboard">';
}

//the read function
$finallogs = "";
$get_logs_query = mysqli_query($conn, "SELECT * FROM `log` ORDER BY `id` desc LIMIT 50");
while($logsdata = mysqli_fetch_assoc($get_logs_query)){
    $finallogs .= '<tr>
    <th scope="row">' . $logsdata["id"] . '</th>
    <td>' . $logsdata["actie"] . '</td>
    <td>' . $logsdata["user"] . '</td>
    <td>' . $logsdata["datetime"] . '</td>
  </tr>';
}

 ?>
<!-- the card that shows the read function -->
 <div class="card">
  <div class="card-body">
    <h2 class="text-center">Meest recente veranderingen in de database.</h2>
    <table class="table table-striped">
  <thead>
<!-- list that shows the items ordered -->
    <tr>
      <th scope="col" width="5%;">#</th>
      <th scope="col" width="45%;">Actie log</th>
      <th scope="col" width="30%;">Username</th>
      <th scope="col" width="20%;">Datum/tijd</th>
    </tr>
  </thead>
  <tbody>
    <?= $finallogs ?>
  </tbody>
</table>
  </div>
</div>
<br>


 <?php include_once("./includes/footer.php"); ?>
