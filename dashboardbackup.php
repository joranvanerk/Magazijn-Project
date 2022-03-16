<?php

include_once("./includes/meta.php");
include_once("./includes/header.php");

 ?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style media="screen">
    * {
  text-decoration: none;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.wrapper .sidebar {
  background: white;
  position: fixed;
  width: 225px;
  height: 100%;
  padding: 20px 0;
  transition: all 0.10s ease;
}

/* This is the css that controles the name and opleidings position */
.wrapper .sidebar .logo {
  text-align: center;
}

/* Here you can disgn the image, how long you want it ect*/
.wrapper .sidebar .logo img {
  display: block;
  width: 200px;
  height: 50px;
  margin: 0 auto;
}

/* Color and size of the names(home,ect) */
.wrapper .sidebar ul li a {
  display: block;
  padding: 13px 30px;
  color: rgb(0, 0, 0);
  font-size: 18px;
  position: relative;
}

/* Icons size, distance and color */
.wrapper .sidebar ul li a .icon {
  color: #000000;
  width: 30px;
  display: inline-block;
}

/* This code will show you when you are on the icon you wanna use or select then the color name will chance */
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active,
.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon {
  color: #0b0ff7;

  background: rgb(140, 209, 230);
  border-right: 2px solid rgb(0, 0, 0);
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before {
  display: block;
}

/* The code that controles how fast the bars go */
.wrapper .section {
  width: calc(100% - 225px);
  margin-left: 225px;
  transition: all 0.1s ease;
}

/* Wher the bar has to go ect */
.wrapper .section .top_navbar {
  height: 50px;
  display: flex;
  align-items: center;
  padding: 0 30px;

}

/* color of the line(Fa Fa-bars) */
.wrapper .section .top_navbar .hamburger a {
  font-size: 28px;
  color: #000000;
}

/* When you are on the bars the color will chance */
.wrapper .section .top_navbar .hamburger a:hover {
  color: #1929b9;
}

/* this conects the side and the bar and makes it Sidebar */
body.active .wrapper .sidebar {
  left: -225px;
}

body.active .wrapper .section {
  margin-left: 0;
  width: 100%;
}
    </style>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo"><img src="./includes/logo.png" alt="logo_picture">
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-circle"></i></span>
                        <span class="item">Profiel</span>
                    </a>
                </li><br>
                <h5 style=" color:blue;">MEDIA & PERS</h5>
                <li>
                    <a href=" #">
                        <span class="icon"><i class="fas fa-box"></i></span>
                        <span class="item">Alle artikelen</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="item">Artikelen goedkeuren</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-book-dead"></i></span>
                        <span class="item">Afgekeurd</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                        <span class="item">Nieuw artikel</span>
                    </a>
                </li>
                <h5 style=" color:blue;">MERKEN</h5>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="item">Vacture</span>
                    </a>
                </li>

                <!-- The Warehouse is only for people that can have acces to it   -->
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fas fa-warehouse"></i></span>
                        <span class="item">Magazijn</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-search"></i></span>
                        <span class="item">Search</span>
                    </a>
                </li>
                <h5 style=" color:blue;">BEHEER</h5>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        document.querySelector("body").classList.toggle("active");
    })
    </script>
