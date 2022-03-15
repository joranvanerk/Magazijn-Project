<?php

include_once("./includes/meta.php");

$QUERY = "SELECT * FROM users";
$results = mysqli_query($conn, $QUERY);
$rows = mysqli_fetch_all($results, MYSQLI_ASSOC);

 ?>

 <select name="user_id">
     <?php
     foreach($rows as $row) {

        ?> <h1>test</h1> <?php
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

