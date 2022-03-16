<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="theme.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo"><img src="./img/logo.png" alt="logo_picture">
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
</body>

</html>