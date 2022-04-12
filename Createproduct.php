  <?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

if(isset($_POST["submit"])){
  // define variables for the query
  $name = cleaning($_POST['name']);
  $stock = cleaning($_POST["stock"]);
  $cat = cleaning($_POST["cat"]);
  // execute query with cleaned variables
  mysqli_query($conn, "INSERT INTO `stock` (`id`, `itemname`, `totalstock`, `totalavailability`, `cat`)
  VALUES (NULL, '$name', '$stock', '1', '$cat')");
  echo $cat;
}


$categorie_options = "";
$get_categorie_query = mysqli_query($conn, "SELECT * FROM `categorie`");
while($get_categorie_data = mysqli_fetch_assoc($get_categorie_query)){
  $categorie_options .= '<option value="' . $get_categorie_data["titel"] . '">' . $get_categorie_data["titel"] . '</option>';
}

?>
<!-- The form for creating a product -->
<form action="" method="POST">
    <input class="form-control" type="text" name="name" placeholder="Itemname">
    <br>
    <input class="form-control" type="text" name="stock" placeholder="Totalstock">
    <br>
    <select class="form-select" name="cat" aria-label="Default select example">
      <option value="Overig" selected>Selecteer categorie</option>
      <?= $categorie_options ?>
    </select>
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
</form>

 <?php include_once("./includes/footer.php"); ?>
