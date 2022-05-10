<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

// hier je php code

 ?>

 <!-- hier je eigen code -->
 <div style="margin: -10px; background-color: #5858aa;">
   <h2 style="text-align: center; color: white;">Welkom <?= $_SESSION["username"] ?> in het magazijn, want je magazijn!</h2>
   <br>
 </div>

 <br>

 <div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">Laatste nieuws</h5>
    <p class="card-text" style="color: #5858aa;">
      Er is op dit moment geen nieuws
    </p>
  </div>
</div>
<br>
 <div class="card">
  <div class="card-body text-center">
    <h5 class="card-title mb-3">Snel navigeren</h5>
    <p class="card-text">
      <a href="profile" class="btn" style="border-color: #5858aa; color: #5858aa;">Profiel</a>
      <a href="requestnewproduct" class="btn" style="border-color: #5858aa; color: #5858aa;">Nieuw product aanvragen</a>
      <a href="instellingen" class="btn" style="border-color: #5858aa; color: #5858aa;">Instellingen</a>
      <a href="permissioncontroller" class="btn" style="border-color: #5858aa; color: #5858aa;">Rollen bewerken</a>
    </p>
  </div>
</div>

 <?php include_once("./includes/footer.php"); ?>
