<?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");
?>
<?php

// code to delete a record
if(isset($_GET["delete"])){
    $id_delete = cleaning($_GET["delete"]);
    mysqli_query($conn, "DELETE FROM `stock` WHERE `id`=$id_delete");
    echo '<meta http-equiv="refresh" content="0;url=./stockRead" />';
}

//Code to connect to the data base, so you can see th information
//query for the categories
if(isset($_GET["cat"])){
    if($_GET["cat"] == "Elektronica"){
        $sql = "SELECT * FROM `stock` WHERE `cat`='Elektronica'";
    }
    else if($_GET["cat"] == "Leermiddelen"){
        $sql = "SELECT * FROM `stock` WHERE `cat`='Leermiddelen'";
    }
    else if($_GET["cat"] == "Overig"){
        $sql = "SELECT * FROM `stock` WHERE `cat`='Overig'";
    }
}else{
    $sql = "SELECT * FROM `stock`";
}

 $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);

 $result = mysqli_query($conn, $sql);

 $records = "";

  while ($record = mysqli_fetch_assoc($result))
  {
      //code to get the code in the right way, there in lowercasses
   $records .= "<tr>
     <th scope='row'>" . $record["id"] . "</th>
     <td> " . $record["itemname"] . "</td>
     <td> " . $record["totalstock"] . "</td>
     <td> " . $record["totalavailability"] . "</td>
     <td> " . $record["pricing"] . "</td>


     <td>
       <a class='btn btn-success' href='./update.php?id=" . $record["id"] . "'>Update</a>
     </td >

     <td>
        <a href='?delete=" . $record["id"] . "' class='btn btn-danger'>
            Delete
        </a>
      </td >

   </tr>";
  }
 // var_dump($records);
?>
<!-- Html code staart here, this is what you will see when you go on the page -->
<!-- dropdown menu with the cat names -->
<div class="card">
  <div class="card-body text-center">
    <h3 class="text-center">Sorteer opties</h3>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Categorie
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="./stockread">Alles</a></li>
        <li><a class="dropdown-item" href="?cat=Elektronica">Elektronica</a></li>
        <li><a class="dropdown-item" href="?cat=Leermiddelen">Leermiddelen</a></li>
        <li><a class="dropdown-item" href="?cat=Overig">Overig</a></li>
      </ul>
    </div>
  </div>
</div>

<br>

<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Voorwerp naam</th>
                            <th scope="col">Totale voorraad</th>
                            <th scope="col">Totale beschikbaarheid</th>
                            <th scope="col">Voorwerp prijs</th>
                            <!-- I added a iItam price row, You can see the prices from the database -->
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //So you can see the database info, with out this you will not see the information
                echo $records;
              ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once("./includes/footer.php"); ?>
