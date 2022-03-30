<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");
// hier je php codE
$result1 = mysqli_query($conn, "SELECT * FROM `stock`");

 ?>

 <!-- hier je eigen code -->

 <style>
      	.center {
 		height: 30vh;
 		display: flex;
 		align-items: center;
 		justify-content: center;
 	}
 </style>


 <div class="center card">
 		<div class="card-body">
			 <h2 class="text-center">Product toevoegen aan opslag</h2>
 				<form method="POST" action="">

 				<label>Kies product</label>
 				<select class="form-control" name="stock" style="margin-bottom: 5px;" required>
                     <?php while($row1 = mysqli_fetch_array($result1)){ 
					
					echo '<option value="' . $row1["itemname"] . '">' . $row1["itemname"] . '</option>';
						 
					 }
						 ?>
 				</select>

                <input class="form-control" type="number" name="stock" placeholder="Totalstock">

                <button class="btn btn-primary" style="margin-top: 5px;" type="submit" name="submit">Opslaan en gaan</button>
			</form>

 		</div>
 	</div>

 <?php include_once("./includes/footer.php"); ?>