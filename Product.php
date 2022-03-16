<?php

include_once("./includes/meta.php");

// php code hier

 ?>

 <!-- html code hier / form -->
 
    <form action="Createproduct.php" method="POST">
        <input type="text" name="name" placeholder="Itemname">
        <br>
        <input type="text" name="stock" placeholder="Totalstock">
        <button type="submit" name="submit">Confirm</button>
    </form>