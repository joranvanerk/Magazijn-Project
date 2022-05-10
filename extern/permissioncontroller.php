<?php

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

$QUERY = "SELECT * FROM users";
$results = mysqli_query($conn, $QUERY);
$rows = mysqli_fetch_all($results, MYSQLI_ASSOC);

if(isset($_POST["submit"])){
    // define variables for the query
    $permission = cleaning($_POST["permission"]);
    $userid = cleaning($_POST["user_id"]);

    // execute query with cleaned variables
    mysqli_query($conn, "UPDATE `users` SET `permissions` = $permission WHERE `idusers` = $userid");
  }

 ?>

<form action="" method="POST">

 <select name="user_id">
     <?php
     foreach($rows as $row) {

        echo '<option value="'.$row["idusers"].'">'.$row["username"].'</option>';

    }

     ?>
</select>

<select name="permission">
  <option value="1">Student</option>
  <option value="2">Warehouse Manager</option>
  <option value="3">Financial Manager</option>
  <option value="4">Superuser</option>
</select>

<button type="submit" name="submit">Edit Permission</button>

</form>

<?php include_once("./includes/footer.php"); ?>

