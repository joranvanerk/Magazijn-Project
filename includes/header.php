<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<!-- navbar color -->
<nav class="navbar navbar-light justify-content-between" style="background-color: #588caa;">

  <!-- search bar -->
  <form class="responsivemb"  action="" method="post" autocomplete="off" style="margin-left: 20px">
    <div class="input-group">
      <div class="input-group-text" style="background-color: #FFFFFF; border: none; border-radius: 25px 0px 0px 25px; padding: 15px;"><i class="fa fa fa-search"></i></div>
      <input placeholder="Zoeken.." style="border: none;
      /* caret-color: transparent; */
        font-size: 14px; border-radius: 0px 25px 25px 0px; padding: 15px; padding-right: 50px;" type="text" name="nav_num">
      </div>
    <button style="opacity: 0%;" type="submit" name="nav_submit"></button>
  </form>
  
  <!-- user page icon -->
  <a class="navbar-brand text-white" href="profile.php"><?= $_SESSION["username"] ?> <i class="fa fa-user text-white fa-2xl"></i></a>

</nav>
<div style="margin: 10px;">
