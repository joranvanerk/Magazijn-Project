  <?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

if(isset($_POST["submit"])){
  // define variables for the query
  $name = cleaning($_POST['name']);
  $stock = cleaning($_POST["stock"]);
  $cat = cleaning($_POST["cat"]);
  $pricing = cleaning($_POST["pricing"]);
  // execute query with cleaned variables
  mysqli_query($conn, "INSERT INTO `stock` (`id`, `itemname`, `totalstock`, `totalavailability`, `cat`, `pricing`)
  VALUES (NULL, '$name', '$stock', '1', '$cat', '$pricing')");
  echo $cat;
}


$categorie_options = "";
$get_categorie_query = mysqli_query($conn, "SELECT * FROM `categorie`");
while($get_categorie_data = mysqli_fetch_assoc($get_categorie_query)){
  $categorie_options .= '<option value="' . $get_categorie_data["titel"] . '">' . $get_categorie_data["titel"] . '</option>';
}

?>

<div class="card">
 <div class="card-body">
   <h2 class="text-center">Maak een nieuw product aan</h2>
    <div class="container">
     <form action="" method="POST">
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Productnaam</label>
         <input type="text" name="name" class="form-control" placeholder="vul hier het productnaam in" id="exampleInputProductnaam">
       </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">stock</label>
        <input type="text" name="stock" class="form-control" placeholder="vul hier het aantal in" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">pricing</label>
        <input type="text" name="pricing" placeholder="vul heir de prijs in" class="form-control" id="exampleInputPassword1">
      </div>
      <select class="form-select" name="cat" aria-label="Default select example">
      <option value="Overig" selected>Selecteer categorie</option>
      <?= $categorie_options ?>
    </select>
    <br>
      </div>
      <div class="d-grid gap-2">
    <button type="submit" name="submit" class="btn" style="background-color: #588CAA; color: white;">Aanmaken</button>
  </div>
  </form>
</div>
 </div>
</div>

<!-- 
The form for creating a product
 <form action="" method="POST"> -->
    <!-- <input class="form-control" type="text" name="name" placeholder="Voorwerp naam">
    <br>
    <input class="form-control" type="text" name="stock" placeholder="Totale voorraad">
    <br>
    <input class="form-control" type="text" name="pricing" min="0" placeholder="Prijs">
    <br>
    <select class="form-select" name="cat" aria-label="Default select example">
      <option value="Overig" selected>Selecteer categorie</option>
      <?= $categorie_options ?>
    </select>
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
</form> -->

 <?php include_once("./includes/footer.php"); ?> -->
