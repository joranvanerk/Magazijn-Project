<?php
    /*
        MySQL Setup
    */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "magazijnextern";

    //inloggen database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function cleaning($raw_data) {
      global $conn;
      $data = mysqli_real_escape_string($conn, $raw_data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
