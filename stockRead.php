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

 $sql = "SELECT * FROM `stock`";

 $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
 
 $result = mysqli_query($conn, $sql);
  
 $records = "";

  while ($record = mysqli_fetch_assoc($result)) 
  {
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
        <a href='./delete.php?id=" . $record["id"] . "'>
        <button style='background-color:red; border-color:black; color:white'> Delete</button>
        </a>
      </td >

   </tr>";
  }
 // var_dump($records);
?>

<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Itam Name</th>
                            <th scope="col">Total Stock</th>
                            <th scope="col">Totaal Availability</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                echo $records;
              ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once("./includes/footer.php"); ?>