<?php
include_once 'includes/db.php';

$name = $_POST['name'];
$stock = $_POST["stock"];
//values
$sql =" INSERT INTO `stock` (`id`, `itemname`, `totalstock`, `totalavailability`)
VALUES (NULL, '$name', '$stock', '1')";
mysqli_query($conn, $sql);

header("Location: ../index.php?product=succes");
?>