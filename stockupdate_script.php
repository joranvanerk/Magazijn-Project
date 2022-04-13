<?
include_once("./includes");

 //code to update a record
  $id = $_POST["id"];
  $itemname = $_POST["itemname"];
  $totalstock = $_POST["totalstock"];
  $totalavailability = $_POST["totalavailability"];
  $itameprice = $_POST["itameprice"];
  $itametotalsum = $_POST["itametotalsum"];
     
   $sql = "UPDATE `stock` SET `itemname` = '$itemname', `totalstock` = '$totalstock', `totalavailability` = '$totalavailability',
    `itameprice` = '$itameprice', `itametotalsum` = '$itametotalsum' WHERE `id` = $id;";
 
 mysqli_query($conn, $sql);

 header("Location: ./stockRead.php");
?>