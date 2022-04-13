<?php
 include_once("./includes/meta.php");
 include_once("./includes/sidebar.php");
 include_once("./includes/header.php");

  $id = $_GET["id"];
 
  $sql = "SELECT * FROM `stock` WHERE `id` = $id";
 
  $result = mysqli_query($conn, $sql);
 
  $record = mysqli_fetch_assoc($result);
 
  //echo "<pre>"; var_dump($record); echo"</pre>";

?>

<!-- Html code staart here, this is what you will see when you go on the page -->
<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table action="./stockupdate_script.php" method=" post" class="table table-hover">
                    <thead>
                        <tr>
                            <!--Thi s code will let you see the information that is was -->
                            <div class="form-group text-dark">
                                <label for="itemname">Item Name</label>
                                <input type="text" class="form-control" id="itemname" aria-describedby="itemnameHelp"
                                    placeholder="Invoer achternaam" name="itemname"
                                    value="<?php echo $record["itemname"]; ?>">
                            </div>
                            <div class="form-group text-dark">
                                <label for="totalstock">Total stock</label>
                                <input type="text" class="form-control" id="totalstock"
                                    aria-describedby="totalstockHelp" placeholder="Invoer achternaam" name="totalstock"
                                    value="<?php echo $record["totalstock"]; ?>">
                            </div>
                            <div class="form-group text-dark">
                                <label for="totalavailability">Total Availability</label>
                                <input type="text" class="form-control" id="totalavailability"
                                    aria-describedby="totalavailabilityHelp" placeholder="Invoer achternaam"
                                    name="totalavailability" value="<?php echo $record["totalavailability"]; ?>">
                            </div>
                            <div class="form-group text-dark">
                                <label for="itameprice">Item Price</label>
                                <input type="text" class="form-control" id="itameprice"
                                    aria-describedby="itamepriceHelp" placeholder="Invoer achternaam" name="itameprice"
                                    value="<?php echo $record["itameprice"]; ?>">
                            </div>
                            <div class="form-group text-dark">
                                <label for="itametotalsum">Item Total Sum</label>
                                <input type="text" class="form-control" id="itametotalsum"
                                    aria-describedby="itametotalsumHelp" placeholder="Invoer achternaam"
                                    name="itametotalsum" value="<?php echo $record["itametotalsum"]; ?>">
                            </div>
                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                            <a href="./stockRead.php?id=">
                                <button type=" submit" style=' background-color:blue; border-color:black; color:white'
                                    alt='send'>
                                    Submit
                                </button>
                            </a>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once("./includes/footer.php"); ?>