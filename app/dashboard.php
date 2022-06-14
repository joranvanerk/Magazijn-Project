<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

// hier je php code

 ?>

 <!-- hier je eigen code -->
 <div style="margin: -10px; background-color: #588CAA;">
   <h2 style="text-align: center; color: white;">Welkom <?= $_SESSION["username"] ?> in het magazijn, want je magazijn!</h2>
   <br>
 </div>

 <br>

 <div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">Laatste nieuws</h5>
    <p class="card-text" style="color: #588CAA;">
      Er is op dit moment geen nieuws
    </p>
  </div>
</div>
<br>
 <div class="card">
  <div class="card-body text-center">
    <h5 class="card-title mb-3">Snel navigeren</h5>
    <p class="card-text">
      <a href="profile" class="btn" style="border-color: #588CAA; color: #588CAA;">Profiel</a>
      <a href="requestnewproduct" class="btn" style="border-color: #588CAA; color: #588CAA;">Nieuw product aanvragen</a>
      <a href="instellingen" class="btn" style="border-color: #588CAA; color: #588CAA;">Instellingen</a>
      <a href="permissioncontroller" class="btn" style="border-color: #588CAA; color: #588CAA;">Rollen bewerken</a>
    </p>
  </div>
</div>

 <?php include_once("./includes/footer.php"); ?>
