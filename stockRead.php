<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
 $sql = "SELECT * FROM `stock`";

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
     
     

     <td>
       <a href='./update.php?id=" . $record["id"] . "'>
       <button style='background-color:green; border-color:black; color:white' > Update </button>
       </a>
     </td >

     <td>
        <a href='?delete=" . $record["id"] . "' class='btn' style='background-color:red; border-color:black; color:white'>
            Delete
        </a>
      </td >

   </tr>";
  }
 // var_dump($records);
?>
<!-- Html code staart here, this is what you will see when you go on the page -->
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  categorieën
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>



<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Total Stock</th>
                            <th scope="col">Totaal Availability</th>
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