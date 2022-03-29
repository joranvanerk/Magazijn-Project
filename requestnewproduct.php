<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

$QUERY = "SELECT * FROM stock";
$results = mysqli_query($conn, $QUERY);
$rows = mysqli_fetch_all($results, MYSQLI_ASSOC);

if(isset($_POST["submit"])){
    // define variables for the query
    $usermail = cleaning($_POST["mailinput"]);
    $itemid = cleaning($_POST["id"]);
    $quantity = cleaning($_POST["quantity"]);
    $description = cleaning($_POST["description"]);
    //$expirationdate = date("Y-M-d", strtotime(date("Y-M-d")."+ 3 days"));
    $expirationdate = date("Y-M-d");
    $status = 0;

    // execute query with cleaned variables
    //Qmysqli_query($conn, "UPDATE `users` SET `permissions` = $permission WHERE `idusers` = $userid");
    $query = "INSERT INTO `requests` ('usermail', 'itemid', 'quantity', 'description', 'expirationdate', 'status') VALUES ('$usermail', '$itemid', '$quantity', '$description', '$expirationdate', '$status') ";
    mysqli_query($conn, "INSERT INTO `requests` (useremail, itemid, quantity, description, expirationdate, status, statusmessage, updateremail) VALUES ('$usermail', '$itemid', '$quantity', '$description', '$expirationdate', '$status', '', '') ");
  }

 ?>

<form method="POST">

 <select name="id">

     <?php
     foreach($rows as $row) {

        echo '<option value="'.$row["id"].'">'.$row["itemname"].'</option>';

    }

     ?>
</select>
<br>
<label for="quantity">Hoeveelheid:</label>
<select name="quantity">
  <option value="1">1 Stuk.</option>
  <option value="2">2 Stuks.</option>
  <option value="3">3 stuks.</option>
</select>
<br>

<label for="description">Beschrijving:</label>
<input type="text" id="description" name="description"><br>

<label for="mailinput">Email:</label>
<input type="text" id="mailinput" name="mailinput"><br>



<button type="submit" name="submit">Vraag product aan</button>

</form>

<?php include_once("./includes/footer.php"); ?>

