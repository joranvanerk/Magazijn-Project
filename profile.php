<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
include_once("./includes/meta.php");
include_once("./includes/sidebar.php");
include_once("./includes/header.php");
?>
<style>

.emp-profile {
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
/*
.profile-img {
    text-align: center;
}
.profile-img img {
    width: 70%;
    height: 100%;
} */
.profile-info h5 {
    color: #333;
}
.profile-info h6 {
    color: #0062cc;
}
.btn {
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rol {
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rol span {
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
/*So that de label can have some distance between the nav line */
.profile-info .nav-tabs {
    margin-bottom: 5%;
}
/*label code so it can look diffrent from de answer letters  */
.profile-tab label {
    font-weight: 600;
}
/* code so the answer code has a other color */
.profile-tab p {
    font-weight: 600;
    color: #0062cc;
}
</style>
<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img ">
                    <img src="#" alt="profile img" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-info">
                    <!--Main info information(name, lastname, student number and more)  -->
                    <h5>
                        hyun bin
                        <!---Php code needed so it comes out of the database--->
                    </h5>
                    <h6>
                        Web Developer and Designer
                        <!---Php code needed so it comes out of the database--->
                    </h6>
                    <p class="proile-rol">Rol : <span>Student</span></p>
                    <!---Php code needed so it comes out of the database--->
                    <!-- end of the main info   -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn" name="btn" value="Edit Profile" />
                <!---Php code to change it in the database too--->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!--so that the information can stai onder about and not move  -->
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <!---Alleen for studenten--->
                            <div class="col-md-6">
                                <label>studentnumer</label>
                            </div>
                            <div class="col-md-6">
                                <p>334455</p>
                            </div>
                        </div>
                        <!----voor alle rollen-->
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>hyun bin</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>kshitighelani@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p>Web Developer and Designer</p>
                                <!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Profielfoto aanpassen
  <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
  <input class="btn btn-primary text-white mt-3" type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

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
  echo "Bestand bestaat al!";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Je bestand is te groot, mag maximaal 50MB zijn.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, enkel JPG, JPEG, PNG & GIF bestanden zijn toegestaan.";
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
    echo "Sorry, er was een error tijdens het uploaden van je bestand.";
  }
}
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



 <?php include_once("./includes/footer.php"); ?>
