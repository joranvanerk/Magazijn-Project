<?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");

$username = $_SESSION["username"];
$get_user_data_query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$username'");
$userdata = mysqli_fetch_assoc($get_user_data_query);
$userrole = "Niet beschikbaar";

if($userdata["permissions"] == 0){
  $userrole = "Beheerder";
}else if($userdata["permissions"] == 1){
  $userrole = "Manager";
}
else if($userdata["permissions"] == 2){
  $userrole = "Medewerker";
}
else if($userdata["permissions"] == 3){
  $userrole = "Gebruiker";
}else if($userdata["permissions"] == 99){
  $userrole = "Non-Actief";
}else{
  $userrole = "Niet beschikbaar";
}

?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center">Profielfoto instellen</h3>
          <br>
          <form action="" method="post" enctype="multipart/form-data">
            <input class="form-control" type="file" style="margin-bottom: 15px;" name="fileToUpload" id="fileToUpload">
            <input class="form-control btn btn-secondary" type="submit" value="Upload Image" name="submit">
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-8">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center">Profiel</h3>
          <div class="container">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Gebruikersnaam:</th>
                  <td><?= $userdata["username"] ?></td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Email:</th>
                  <td><?= $userdata["mail"] ?></td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Gebruikersrol:</th>
                  <td><?= $userrole ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST["submit"])){
$target_dir = "profileimages/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Bestand is een afbeelding - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Bestand is geen afbeelding.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, bestand bestaat al.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, bestand is te groot.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, we ondersteunen alleen bestanden met volgende datatypen: jpg, png, jpeg, gif.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, je bestand is niet geupload.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Het bestand ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " is geupload.";
  } else {
    echo "Sorry, er was een error tijdens het uploaden van jouw bestand.";
  }
}
}
?>

<?php include_once("./includes/footer.php"); ?>
