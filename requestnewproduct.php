<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

$QUERY = "SELECT * FROM stock";
$results = mysqli_query($conn, $QUERY);
$rows = mysqli_fetch_all($results, MYSQLI_ASSOC);

if(isset($_POST["submit"])){
    // define variables for the query
    $quanity = cleaning($_POST["quanity"]);
    $userid = cleaning($_POST["id"]);

    // execute query with cleaned variables
    //Qmysqli_query($conn, "UPDATE `users` SET `permissions` = $permission WHERE `idusers` = $userid");
    mysqli_query($conn, "INSERT INTO `requests` (`id`, `useremail`, `itemid`, `itemname`, `quanity`, `description`, `expirationdate`, `status`, `statusmessage`, `updateremail`) VALUES (1, 'info@maikel.nl', 600, 'Pen', 1, 'Ik wil schrijven', '29-03-2022', '0', 'Veel plezier', 'info@joranvanerk.nl')");
  }

 ?>

<form action="" method="POST">

 <select name="id">

     <?php
     foreach($rows as $row) {

        echo '<option value="'.$row["id"].'">'.$row["itemname"].'</option>';

    }

     ?>
</select>
<br>
<label for="quanity">Hoeveelheid:</label>
<select name="quanity">
  <option value="1">1 Stuk.</option>
  <option value="2">2 Stuks.</option>
  <option value="3">3 stuks.</option>
</select>
<br>

<label for="quanityinput">Beschrijving:</label>
<input type="text" id="quanityinput" name="quanity"><br>

<label for="mailinput">Email:</label>
<input type="text" id="mailinput" name="mail"><br>



<button type="submit" name="submit">Vraag product aan</button>

</form>

<?php include_once("./includes/footer.php"); ?>

