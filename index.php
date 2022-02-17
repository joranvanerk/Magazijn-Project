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
            <div class="profile"><img src="./img/1.jpg" alt="profile_picture">
                <h3>#</h3>
                <p>Software devoleper</p>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-box"></i></span>
                        <span class="item">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="item">Products</span>
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