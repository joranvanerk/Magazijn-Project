  <?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

if(isset($_POST["submit"])){
  // define variables for the query
  $name = cleaning($_POST['name']);
  $stock = cleaning($_POST["stock"]);
  // execute query with cleaned variables
  mysqli_query($conn, "INSERT INTO `stock` (`id`, `itemname`, `totalstock`, `totalavailability`)
  VALUES (NULL, '$name', '$stock', '1')");
}

?>

<form action="" method="POST">
    <input class="form-control" type="text" name="name" placeholder="Itemname">
    <br>
    <input class="form-control" type="text" name="stock" placeholder="Totalstock">
    <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
</form>

 <?php include_once("./includes/footer.php"); ?>
